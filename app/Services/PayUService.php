<?php

/*  */
namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;
use App\Services\exChangeRateService;
use Illuminate\Support\Str;

class PayUService
{
  use ConsumesExternalServices;

  protected $baseUri;

  protected $key;

  protected $secret;

  protected $baseCurrency;

  protected $merchantId;

  protected $accountId;

  protected $converter;

  public function __construct(exChangeRateService $converter)
  {
    $this->baseUri        = config('services.payu.base_uri');
    $this->key            = config('services.payu.key');
    $this->secret         = config('services.payu.secret');
    $this->baseCurrency   = strtoupper(config('services.payu.base_currency'));
    $this->merchantId     = config('services.payu.merchant_id');
    $this->accountId      = config('services.payu.account_id');
    $this->converter      = $converter;
  }

  public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
  {
    $formParams['merchant']['apiKey'] = $this->key;
    $formParams['merchant']['apiLogin'] = $this->secret;
  }

  public function decodeResponse($response)
  {
    return json_decode($response);
  }

  public function handlePayment(Request $request)
  {
    /* Esto se va a reutilizar llegado el momento */
    $request->validate([
      'card_network' => 'required',
      'card_token'   => 'required',
      'email'        => 'required',
    ]);

    $payment = $this->createPayment(
      $request->value,
      $request->currency,
      $request->card_network,
      $request->card_token,
      $request->email
    );

    if ($payment->status === 'approved') {
      $name = $payment->payer->first_name;
      $currency = strtoupper($payment->currency_id);
      $amount = number_Format($payment->transaction_amount, 0, ',', '.'); /* Darle formato al valor de la transacción */

      $originalAmount = $request->value;
      $originalCurrency = strtoupper($request->currency);

      return redirect()->route('home')
        ->withSuccess(['payment' => "Thanks, {$name}. 
            We received your {$originalAmount}{$originalCurrency} payment ({$amount}{$currency})."]);
    }
    return redirect()->route('home')
      ->withErrors('We were unable to confirm your payment. Try again, please');
  }

  public function handleApproval()
  {
    //  PayU no necesita esta función porque lo aprueba automáticamente pero se deja como referencia
  }

  public function createPayment($value, $currency, $name, $email, $card, $cvc, $year, $month, 
    $network, $installments = 1, $paymentCountry = 'MX')
  {
    return $this->makeRequest(
      'POST', /* $method */
      '/payments-api/4.0/service.cgi',
      [], /* $queryParams */
      [ /* $formParams */
        'language' => $language = config('app.locale'), /* $language se usa más abajo pero aquí se declara */
        'command' => 'SUBMIT_TRANSACTION',
        'test' => false, 
        'transaction' => [
          'type' => 'AUTHORIZATION_AND_CAPTURE',
          'paymentMethod' => strtoupper($network), /* Se define en el parámetro */
          'paymentCountry' => strtoupper($paymentCountry), /* Se define en el parámetro */
          'deviceSessionId' => session()->getId(), /* El Id de la sesión - lo proporciona Laravel */
          'ipAddress' => request()->ip(), /* Ip de la máquina */
          'userAgent' => request()->header('User-Agent'), /* Navegador usado para procesar el pago */
          'creditCard' => [
            'number' => $card, /* Se define en el parámetro */
            'securityCode' => $cvc, /* Se define en el parámetro */
            'expirationDate' => "{$year}/{$month}", /* Se definen en el parámetro */
            'name' => 'APPROVED',
          ], 
          'extraParameters' => [
            'INSTALLMENTS_NUMBER' => $installments,
          ],
          'payer' => [
            'fullName' => $name, /* Se define en el parámetro */
            'emailAddress' => $email, /* Se define en el parámetro */
          ],
          'order' => [
            'accountId' => $this->accountId, /* protected $accountId; */
            'referenceCode' => $reference = Str::random(12), /* Genera un string random de 12 caracteres */
            'description' => 'Testing PayU', /* Puede ser dinámico pasandose como parámetro en la función */
            'language' => $language,
            'signature' => 
                $this->generateSignature($reference, $value = round($value * $this->resolveFactor($currency))),
                /* 
                  $reference se declara un poco más arriba, $value se define como parámetro y es igual al
                  redondode de $value multiplicado por valor de conversión de la moneda(función resolveFactor())
                */
            'additionalValues' => [
              'TX_VALUE' => [
                'value' => $value, /* Se define en el parámetro */
                'currency' => $this->baseCurrency, /* protected $baseCurrency; */
              ],
            ],
            'buyer' => [
              'fullName' => $name, /* Se define en el parámetro */
              'emailAddress' => $email, /* Se define en el parámetro */
              'shippingAddress' => [
                'street1' => '',
                'city' => '',
              ], 
            ],
          ],
        ],
      ], 
      [ /* $headers */
        'Accept' => 'application/json',
      ], 
      $isJsonRequest = true
    );
  }

  public function resolveFactor($currency)
  {
    return $this->converter->convertCurrency($currency, $this->baseCurrency);
  }

  public function generateSignature($referenceCode, $value)
  {
    return md5("{$this->key}~{$this->merchantId}~{$referenceCode}~{$value}~{$this->baseCurrency}");
  }
}
/*  */

/* Notas:
    *md5 es una función propia de PHP
*/