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
    ThemeRepository,
    PageRepository
};

use App\Repositories\Eloquent\Pages\{
    EloquentCategoryRepository,
    EloquentThemeRepository,
    EloquentPageRepository
};

use App\Repositories\Contracts\Users\BusinessEntityRepository;
use App\Repositories\Eloquent\Users\EloquentBusinessEntityRepository;

use App\Repositories\Contracts\Tests\{
    TestRepository,
    TestResultRepository
};

use App\Repositories\Eloquent\Tests\{
    EloquentTestRepository,
    EloquentTestResultRepository
};

use App\Repositories\Contracts\Reviews\ReviewRepository;
use App\Repositories\Eloquent\Reviews\EloquentReviewRepository;

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
        $this->app->bind(ThemeRepository::class, EloquentThemeRepository::class);
        $this->app->bind(PageRepository::class, EloquentPageRepository::class);
        $this->app->bind(ProductRepository::class, EloquentProductRepository::class);
        $this->app->bind(BusinessEntityRepository::class, EloquentBusinessEntityRepository::class);
        $this->app->bind(TestRepository::class, EloquentTestRepository::class);
        $this->app->bind(TestResultRepository::class, EloquentTestResultRepository::class);
        $this->app->bind(ReviewRepository::class, EloquentReviewRepository::class);
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
