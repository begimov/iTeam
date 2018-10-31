<?php

use Carbon\Carbon;
use Faker\Generator as Faker;
use App\Models\Products\Product;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'category_id' => 1,
        'price' => 0
    ];
});
