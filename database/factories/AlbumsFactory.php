<?php

use Faker\Generator as Faker;

$factory->define(App\Albums::class, function (Faker $faker) {

    return [
        //
        'albumname' => $faker->sentence(),
    'productyear' => $faker->year,
    'albumcover' => $faker->imageUrl(640,480),
    'kind'=> $faker->word
    ];
});
