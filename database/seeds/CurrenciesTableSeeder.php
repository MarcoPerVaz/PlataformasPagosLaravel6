<?php

use Illuminate\Database\Seeder;
/*  */
use App\Currency;
/*  */

class CurrenciesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*  */
        $currencies = [
            'mxn',
            'usd',
            'eur',
            'gbp',
            'jpy',
        ];
        foreach ($currencies as $currency) {
            Currency::create([
                'iso' => $currency,
            ]);
        }
        /*  */
    }
}
