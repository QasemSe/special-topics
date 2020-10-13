<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Payment;
use App\Customer;
use Faker\Generator as Faker;

$factory->define(Payment::class, function (Faker $faker) {
    return [
        'check_num' => $faker->unique()->swiftBicNumber,
        'customer_id' => Customer::all()->random()->id,
        'payment_date' => $faker->dateTime,
        'amount' => $faker->numberBetween(1, 999)
    ];
});
