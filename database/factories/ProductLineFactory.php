<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ProductLine;
use Faker\Generator as Faker;

$factory->define(ProductLine::class, function (Faker $faker) {
    return [
        'desc_in_text' => $faker->sentence,
        'desc_in_html' => $faker->sentence,
        'image' => $faker->imageUrl()
    ];
});
