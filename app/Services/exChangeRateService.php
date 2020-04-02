<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;

class exChangeRateService{

  use ConsumesExternalServices;

  protected $baseUri;

  protected $apiKey;

  public function __construct()
  {
    $this->baseUri = config('services.ex_change_conversion.base_uri');
    $this->apiKey = config('services.ex_change_conversion.api_key');
  }

  public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
  {
    $queryParams['apiKey'] = $this->resolveAccessToken();
  }

  public function decodeResponse($response)
  {
    return json_decode($response);
  }

  public function resolveAccessToken()
  {
    return $this->apiKey;
  }

  public function convertCurrency($from, $to)
  {
    $response = $this->makeRequest(
      'GET',
      "/v5/{$this->apiKey}/latest/{$from}"
    );

    return $response->conversion_rates->{strtoupper("{$to}")};
  }
}