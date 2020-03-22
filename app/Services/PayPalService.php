<?php

/*  */
namespace App\Services;

use App\Traits\ConsumesExternalServices;

class PayPalService
{
  use ConsumesExternalServices;

  protected $baseUri;

  protected $clientId;

  protected $clientSecret;

  public function __construct()
  {
    $this->baseUri = config('services.paypal.base_uri');
    $this->clientId = config('services.paypal.client_id');
    $this->clientSecret = config('services.paypal.client_secret');
  }

  public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
  {
    $headers['Authorization'] = $this->resolveAccessToken();
  }

  public function decodeResponse($response)
  {
    return json_decode($response);
  }

  public function resolveAccessToken()
  {
    $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

    return "Basic {$credentials}";
  }

  public function createOrder($value, $currency)
  {
    return $this->makeRequest(
      'POST',                 /* $method */
      '/v2/checkout/orders', /* $requestUrl */
      [],                     /* $queryParams */
      [  /* $formParams */
        'intent' => 'CAPTURE',
        'purchase_units' => [
          0 => [
            'amount' => [
              'currency_code' => strtoupper($currency),
              'value' => $value,
            ]
          ]
        ],
        'application_context' => [
          'brand_name' => config('app.name'),
          'shipping_preference' => 'NO_SHIPPING',
          'user_action' => 'PAY_NOW',
          'return_url' => route('approval'),
          'cancel_url' => route('cancelled'),
        ]
      ],                    
      [],                     /* $headers */
      $isJsonRequest = true,  /* $isJsonRequest */
    );
  }

  public function capturePayment($approvalId)
  {
    return $this->makeRequest(
      'POST', /* $method */
      "/v2/checkout/orders/{$approvalId}/capture", /* $requestUrl */
      [], /* $queryParams */
      [], /* $formParams */
      [ /* $headers */
        'Content-Type' => 'application/json'
      ]
    );
  }
  
}
/*  */

/* Notes:
    *En createOrder($value, $currency)
      *$value es la cantidad 
      *$currency es la moneda 
    *En capturePayment($approvalId)
      *$approvalId es el id de la orden de pago
    *En esta parte hay un error que en el curso no se muestra (en laragon hay error pero usando php artisan serve no)
      *Al cerrar la llave ] en el curso lleva una coma (],), pero yo se la tuve que quitar porque no me funcionaba
       [  
          'Content-Type' => 'application/json'
       ]
*/