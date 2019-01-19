<?php

use Faker\Generator as Faker;
use App\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => $faker->firstName,
        'last_name' => $faker->lastName,
        'email' => $faker->safeEmail,
        'phone_number' => $faker->numberBetween(212600000000, 212699999999),
        'birth_date' => $faker->date($format = 'Y-m-d', $max = '2001-01-16'),
        'function' => $faker->jobTitle,
        'city' => $faker->city,
        'company_name' => $faker->company,
        'company_address' => $faker->address
    ];
});

