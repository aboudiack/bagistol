<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Produit;
use Faker\Generator as Faker;

$factory->define(Produit::class, function (Faker $faker) {
    return [
        'designation'=> $this->faker->unique()->realText(20),
        'description'=>$this->faker->realText(100),
        'prix'=>$this->faker->numberBetween(500, 1000000)
    ];
});
