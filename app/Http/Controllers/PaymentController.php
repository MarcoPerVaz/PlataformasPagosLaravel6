<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
/*  */
use App\Services\PayPalService;
/*  */

class PaymentController extends Controller
{
    /*  */
    public function pay(Request $request)
    {
        $rules = [
            'value'             => ['required', 'numeric', 'min:5'],
            'currency'          => ['required', 'exists:currencies,iso'],
            'payment_platform'  => ['required', 'exists:payment_platforms,id'],
        ];

        $request->validate($rules);

        $paymentPlatform = resolve(PayPalService::class); 

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        $paymentPlatform = resolve(PayPalService::class);

        return $paymentPlatform->handleApproval();
    }

    public function cancelled()
    {
        return redirect()->route('home')->withErrors('You cancelled the payment');
    }
    /*  */
}

/* Notes:
    * resolve(PayPalService::class);: inyecta o resuelve dependiendo lo que se necesite
        *En este caso llama al constructor(__construct()) de app\Services\PayPalService.php
*/
