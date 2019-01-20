<?php

use Faker\Generator as Faker;
use App\Contact;

$factory->define(Contact::class, function (Faker $faker) {
    return [
        'first_name' => "Contact",
        'last_name' => "Boudlale",
        'email' => "boudlal98@gmail.com",
        'phone_number' => "212652317330",
        'birth_date' => "1998/07/12",
        'function' => "Full stack web developer",
        'city' => "Kenitra",
        'company_name' => "Matious",
        'company_address' => "Mohammedia"
    ];
});
