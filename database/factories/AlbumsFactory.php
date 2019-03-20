<?php

use Faker\Generator as Faker;

$factory->define(App\Albums::class, function (Faker $faker) {

    return [
        //
        'albumname' => $faker->sentence,
    'productyear' => $faker->year,
    'albumcover' => $faker->imageUrl,
    'kind'=> $faker->word
    ];
});
