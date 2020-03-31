<?php

/*  */
namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;

class MercadoPagoService
{
  use ConsumesExternalServices;

  protected $baseUri;

  protected $key;

  protected $secret;

  protected $baseCurrency;

  public function __construct()
  {
    $this->baseUri        = config('services.mercadopago.base_uri');
    $this->key            = config('services.mercadopago.key');
    $this->secret         = config('services.mercadopago.secret');
    $this->baseCurrency   = config('services.mercadopago.base_currency');
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
    return $this->secret;;
  }

  public function handlePayment(Request $request)
  {
    dd($request->all()); 
  }

  public function handleApproval()
  {
    //  MercadoPago no necesita esta función porque lo aprueba automáticamente pero se deja como referencia
  }

  public function resolveFactor($currency)
  {
    // 
  }
}
/*  */