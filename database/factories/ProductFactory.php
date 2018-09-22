<?php

use Faker\Generator as Faker;

$factory->define(App\Product::class, function (Faker $faker) {
    return [
    	//datos falsos o datos semillas
        'name'=> $faker->sentence,
        'description'=>$faker->sentence
    ];
});
