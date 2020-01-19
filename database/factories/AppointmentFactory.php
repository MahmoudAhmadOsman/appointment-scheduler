<?php

use Faker\Generator as Faker;

$factory->define(App\Appointment::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'name' => $faker->name,
        'fee' => $faker->numberBetween(100, 1000),
        'details' => $faker->sentence,
        'appTime' => $faker->date,
        'location' => $faker->city,
        'doctor' => $faker->name,
        'appMaker' => $faker->name,
        'amount' => $faker->word('yes'),
        
    ];
});


//php artisan make:factory AppointmentFactory -m Appointment
//factory(\App\Appointment::class,50)->create();

//'amount' => $faker->numberBetween(100, 1000),


