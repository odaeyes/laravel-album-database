<?php

use Faker\Generator as Faker;

$factory->define(App\Songs::class, function (Faker $faker) {
    return [
        //
        'name'=>$faker->sentence,
        'productdate'=>$faker->dateTimeAD
    ];
});
