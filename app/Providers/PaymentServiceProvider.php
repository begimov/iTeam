<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Payments\Contracts\IWalletOne;
use App\Services\Payments\WalletOne;

class PaymentServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(IWalletOne::class, WalletOne::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
