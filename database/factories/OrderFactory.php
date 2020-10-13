<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'customer_id' => Customer::all()->random()->id,
        'order_date' => $faker->dateTime,
        'required_date' => $faker->dateTime,
        'shipped_date' => $faker->dateTime,
        'status' => $faker->randomDigit,
        'comments' => $faker->sentence
    ];
});
