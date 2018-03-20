<?php

namespace App\Repositories\Eloquent\Pages;

use App\Repositories\EloquentRepositoryAbstract;
use App\Repositories\Contracts\Pages\CategoryRepository;

use App\Models\Pages\Category;

class EloquentCategoryRepository extends EloquentRepositoryAbstract implements CategoryRepository
{
    public function entity()
    {
        return Category::class;
    }
}
