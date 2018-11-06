<?php

use Faker\Generator as Faker;
use App\Models\Products\Material;

$factory->define(Material::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'token' => uniqid()
    ];
});
