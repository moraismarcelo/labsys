<?php

use Faker\Generator as Faker;
use LabSys\Product;
$factory->define(Product::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(),
    ];
});
