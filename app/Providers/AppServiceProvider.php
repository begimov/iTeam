<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Marketing\GetResponse;
use App\Services\Marketing\Contracts\IGetResponse;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('HttpClient', function ($app) {
            return new \GuzzleHttp\Client();
        });

        $this->app->bind(IGetResponse::class, function ($app) {
            return new GetResponse(
                $app->make('HttpClient'), 
                config('services.getresponse.key'), 
                config('services.getresponse.url')
            );
        });
    }
}
