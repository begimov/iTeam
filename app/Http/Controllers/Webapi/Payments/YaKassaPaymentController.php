<?php

namespace App\Http\Controllers\Webapi\Payments;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use YandexCheckout\Client;
use App\Repositories\Contracts\Products\OrderRepository;

class YaKassaPaymentController extends Controller
{
    protected $orders;

    public function __construct(OrderRepository $orders)
    {
        $this->orders = $orders;
    }

    public function getPaymentUrl(Request $request)
    {
        dd($this->createPayment());
    }

    protected function createPayment(Client $client)
    {
        $client->createPayment(
            [
                'amount' => [
                    'value' => 2.0,
                    'currency' => 'RUB',
                ],
                'confirmation' => [
                    'type' => 'redirect',
                    'return_url' => config('urls.user_dashboard'),
                ],
                'description' => 'iTeam - Заказ №',
            ],
            uniqid('', true)
        );
    }
}
