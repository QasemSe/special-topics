<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Customer;
use App\Employee;
use Faker\Generator as Faker;

$factory->define(Customer::class, function (Faker $faker) {
    return [
        'sales_rep_employee_num' => Employee::all()->random()->id,
        'name' => $faker->name,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'phone' => $faker->unique()->phoneNumber,
        'first_address' => $faker->address,
        'second_address' => $faker->secondaryAddress,
        'city' => $faker->city,
        'state' => $faker->state,
        'postal_code' => $faker->postcode,
        'country' => $faker->country,
        'credit_limit' => $faker->numberBetween(1, 9999999)
    ];
});
