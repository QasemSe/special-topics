<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Office;
use Faker\Generator as Faker;

$factory->define(Office::class, function (Faker $faker) {
    return [
        'city' => $faker->city,
        'phone' => $faker->unique()->phoneNumber,
        'first_address' => $faker->address,
        'second_address' => $faker->secondaryAddress,
        'state' => $faker->state,
        'country' => $faker->country,
        'postal_code' => $faker->postcode,
        'territory' => $faker->city
    ];
});
