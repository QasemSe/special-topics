<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrderProduct;
use App\Order;
use App\Product;
use Faker\Generator as Faker;

$factory->define(OrderProduct::class, function (Faker $faker) {
    return [
        'order_id' => Order::all()->random()->id,
        'product_code' => Product::all()->random()->code,
        'qty' => $faker->numberBetween(1, 100),
        'price_each' => $faker->numberBetween(5, 1000)
    ];
});
