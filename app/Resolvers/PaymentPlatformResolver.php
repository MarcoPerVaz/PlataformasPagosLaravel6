<?php

/*  */
namespace App\Resolvers;

use App\PaymentPlatform;
use Exception;

class PaymentPlatformResolver
{
  protected $paymentPlatform;

  public function __construct()
  {
    $this->paymentPlatforms = PaymentPlatform::all();
  }

  public function resolveService($paymentPlatformId)
  {
    $name = strtolower($this->paymentPlatforms->firstWhere('id', $paymentPlatformId)->name);

    $service = config("services.{$name}.class"); /* class se instancia en  */

    if ($service) {
      return resolve($service);
    }

    throw new Exception("The selected payment platform is not in the configuration", 1);
  }
}
/*  */