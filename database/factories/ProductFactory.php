<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use App\ProductLine;
use Faker\Generator as Faker;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'product_line_id' => ProductLine::all()->random()->id,
        'name' => $faker->sentence(4),
        'scale' => $faker->numberBetween(1, 100),
        'vendor' => $faker->name,
        'description' => $faker->sentence,
        'qty_in_stock' => $faker->numberBetween(1, 100),
        'buy_price' => $faker->numberBetween(1, 1000),
        'msrp' => $faker->numberBetween(1, 1000)
    ];
});
