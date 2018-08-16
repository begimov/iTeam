<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Repositories\Contracts\Products\{
    OrderRepository,
    ProductRepository
};

use App\Repositories\Eloquent\Products\{
    EloquentOrderRepository,
    EloquentProductRepository
};

use App\Repositories\Contracts\Pages\{
    CategoryRepository,
    PageRepository
};

use App\Repositories\Eloquent\Pages\{
    EloquentCategoryRepository,
    EloquentPageRepository
};

use App\Repositories\Contracts\Users\BusinessEntityRepository;
use App\Repositories\Eloquent\Users\EloquentBusinessEntityRepository;

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
        $this->app->bind(PageRepository::class, EloquentPageRepository::class);
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
        $this->app->bind(BusinessEntityRepository::class, EloquentBusinessEntityRepository::class);
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
