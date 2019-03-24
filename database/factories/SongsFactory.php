<?php

use Faker\Generator as Faker;

$factory->define(App\Songs::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->sentence(),
        'productdate'=>$faker->dateTimeAD(),
        'artist'=>function(){
        	return factory(App\Artists::class)->create()->id;
        },
        'album'=>function(){
        	return factory(App\Albums::class)->create()->id;
        }
    ];
});
