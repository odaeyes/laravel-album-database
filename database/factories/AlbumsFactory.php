<?php

use Faker\Generator as Faker;

$factory->define(App\Albums::class, function (Faker $faker) {
    return [
        //
        'albumname' => $faker->sentence(),
        'productyear'=>$faker->year(),
        'kind'=>$faker->word,
        'cover'=>$faker->imageUrl(640,480),
        'label'=>$faker->word,
        'rank'=>$faker->numberBetween(0,10),
        'artist'=>function(){
        	return factory(App\Artists::class)->create()->id;
        }
    ];
});
