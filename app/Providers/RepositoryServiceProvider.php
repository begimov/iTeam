<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\Contracts\Products\OrderRepository;
use App\Repositories\Eloquent\Products\EloquentOrderRepository;
use App\Repositories\Contracts\Pages\CategoryRepository;
use App\Repositories\Eloquent\Pages\EloquentCategoryRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(OrderRepository::class, EloquentOrderRepository::class);
        $this->app->bind(CategoryRepository::class, EloquentCategoryRepository::class);
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
