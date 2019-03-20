<?php

use Faker\Generator as Faker;

$factory->define(App\Artists::class, function (Faker $faker) {
    return [
        //
        'lastname'=>$faker->lastName,
        'firstname'=>$faker->firstname()
    ];
});
