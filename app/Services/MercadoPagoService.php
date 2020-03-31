<?php

/*  */
namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;
use App\Services\CurrencyConversionService;

class MercadoPagoService
{
  use ConsumesExternalServices;

  protected $baseUri;

  protected $key;

  protected $secret;

  protected $baseCurrency;

  protected $converter;

  public function __construct(CurrencyConversionService $converter)
  {
    $this->baseUri        = config('services.mercadopago.base_uri');
    $this->key            = config('services.mercadopago.key');
    $this->secret         = config('services.mercadopago.secret');
    $this->baseCurrency   = config('services.mercadopago.base_currency');
    $this->converter      = $converter;
  }

  public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
  {
    $queryParams['access_token'] = $this->resolveAccessToken();
  }

  public function decodeResponse($response)
  {
    return json_decode($response);
  }

  public function resolveAccessToken()
  {
    return $this->secret;
  }

  public function handlePayment(Request $request)
  {
    dd($request->all()); 
  }

  public function handleApproval()
  {
    //  MercadoPago no necesita esta función porque lo aprueba automáticamente pero se deja como referencia
  }

  public function createPayment($value, $currency, $cardNetwork, $cardToken, $email, $installments = 1)
  {
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
}
/*  */