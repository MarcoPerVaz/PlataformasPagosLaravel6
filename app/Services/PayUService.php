<?php

/*  */
namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;
use App\Services\exChangeRateService;

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
    $this->baseCurrency   = config('services.payu.base_currency');
    $this->merchantId     = config('services.payu.merchant_id');
    $this->accountId      = config('services.payu.account_id');
    $this->converter      = $converter;
  }

  public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
  {
    // 
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

  public function createPayment($value, $currency, $cardNetwork, $cardToken, $email, $installments = 1)
  {
    /* Esto se va a reutilizar llegado el momento */
    return $this->makeRequest(
      'POST', /* $method */
      '/v1/payments',
      [], /* $queryParams */
      [ /* $formParams */
        'payer' => [
          'email' => $email,
        ],
        'binary_mode' => true, /* O es aceptada o es rechazada - sin (pendiente, espera de aprobación, etc) */
        'transaction_amount' => round($value * $this->resolveFactor($currency)),
        'payment_method_id' => $cardNetwork,
        'token' => $cardToken,
        'installments' => $installments,
        'statement_descriptor' => config('app.name'),
      ], 
      [], /* $headers */
      $isJsonRequest = true
    );
  }

  public function resolveFactor($currency)
  {
    return $this->converter->convertCurrency($currency, $this->baseCurrency);
  }

  public function generateSignature()
  {
    // 
  }
}
/*  */