<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Employee;
use App\Office;
use Faker\Generator as Faker;

$factory->define(Employee::class, function (Faker $faker) {
    return [
        'office_code' => Office::all()->random()->code,
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'extension' => $faker->word,
        'email' => $faker->email,
        'job_title' => $faker->jobTitle
    ];
});
