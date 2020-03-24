<?php

use Illuminate\Database\Seeder;
/*  */
use App\PaymentPlatform;
/*  */

class PaymentPlatformTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  */
        PaymentPlatform::create([
            'name' => 'paypal',
            'image' => 'img/payment-platforms/paypal.jpg',
        ]);
        PaymentPlatform::create([
            'name' => 'stripe',
            'image' => 'img/payment-platforms/stripe.jpg',
        ]);

        PaymentPlatform::create([
            'name' => 'MercadoPago',
            'image' => 'img/payment-platforms/mercadopago.jpg',
        ]);
        /*  */
    }
}
