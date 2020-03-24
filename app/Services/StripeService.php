<?php

/*  */
namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;

class StripeService
{
  use ConsumesExternalServices;

  protected $key;
  
  protected $secret;

  protected $baseUri;
  
  public function __construct()
  {
    $this->key = config('services.stripe.key');
    $this->secret = config('services.stripe.secret');
    $this->baseUri = config('services.stripe.base_uri');
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
    return "Bearer {$this->secret}";
  }

  public function handlePayment(Request $request)
  {
    $request->validate([
      'payment_method' => 'required',
    ]);

    $intent = $this->createIntent($request->value, $request->currency, $request->payment_method);

    session()->put('paymentIntentId', $intent->id);

    return redirect()->route('approval');
  }

  public function handleApproval()
  {
    if (session()->has('paymentIntentId')) {
      $paymentIntentId = session()->get('paymentIntentId');

      $confirmation = $this->confirmPayment($paymentIntentId);

      // dd($confirmation); /* Muestra toda la información de la variable $confirmation */

      if ($confirmation->status === 'requires_source_action') {
        $clientSecret = $confirmation->client_secret;

        return view('stripe.3d-secure')->with(['clientSecret' => $clientSecret]);
      }
      if ($confirmation->status === 'succeeded') {

        $name = $confirmation->charges->data[0]->billing_details->name;
        $currency = strtoupper($confirmation->currency);
        $amount = $confirmation->amount / $this->resolvefactor($currency);

        return redirect()->route('home')
          ->withSuccess(['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment."]);
      }
    }
    return redirect()->route('home')
      ->withErrors('We were unable to confirm your payment. Try again, please');
  }

  public function createIntent($value, $currency, $paymentMethod)
  {
    return $this->makeRequest(
      'POST', /* $method */
      '/v1/payment_intents', /* $requestUrl */
      [], /* $queryParams */
      [ /* $formParams */
        'amount'              => round($value * $this->resolveFactor($currency)), /* 5.01 => 501 */
        'currency'            => strtolower($currency),
        'payment_method'      => $paymentMethod,
        'confirmation_method'  => 'manual',
      ] 
    );
  }

  public function confirmPayment($paymentIntentId)
  {
    return $this->makeRequest(
      'POST', /* $method */
      "/v1/payment_intents/{$paymentIntentId}/confirm" /* $requestUrl */
    );
  }

  public function resolveFactor($currency)
  {
    $zeroDecimalCurrencies = ['JPY'];

    if (in_array(strtoupper($currency), $zeroDecimalCurrencies)) {
      return 1;
    }
    return 100;
  }
}
/*  */