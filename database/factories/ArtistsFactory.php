<?php

use Faker\Generator as Faker;

$factory->define(App\Artists::class, function (Faker $faker) {
    return [
        //
        'lastname' => $faker->lastName,
        'firstname'=>$faker->firstName(),
        'song'=>function(){
        	return factory(App\Songs::class)-create()->id;
        },
        'album'=>function(){
        	return factory(App\Albums::class)-create()->id;
        }
    ];
});
