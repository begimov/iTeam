<?php

use App\Models\Tests\Test;
use Faker\Generator as Faker;

$factory->define(Test::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'test_type_id' => 1
    ];
});
