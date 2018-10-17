<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Payments\Contracts\IWalletOne;
use App\Services\Payments\WalletOne;
use YandexCheckout\Client;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind('YandexCheckout\Client', function ($app) {

            $client = new Client();

            $client->setAuth(env('YA_KASSA_ID'), env('YA_KASSA_KEY'));

            return $client;
        });
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(IWalletOne::class, WalletOne::class);
    }
}
