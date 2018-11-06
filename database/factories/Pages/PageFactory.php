<?php

use App\Models\Pages\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'description' => $faker->sentence,
        'status' => 1,
        'slug' => $faker->slug
    ];
});
