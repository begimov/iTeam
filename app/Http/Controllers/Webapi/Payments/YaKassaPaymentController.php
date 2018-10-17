<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use YandexCheckout\Client;

class YaKassaPaymentController extends Controller
{
    public function getPaymentUrl(Client $client)
    {
        $res = $client->createPayment(
            array(
                'amount' => array(
                    'value' => 2.0,
                    'currency' => 'RUB',
                ),
                'confirmation' => array(
                    'type' => 'redirect',
                    'return_url' => config('urls.user_dashboard'),
                ),
                'description' => 'Заказ №72',
            ),
            uniqid('', true)
        );

        dd($res);
    }
}
