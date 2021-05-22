<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use Faker\Generator as Faker;

$factory->define(Category::class, function (Faker $faker) {
    return [
        'designation'=>$this->faker->unique()->realText(10),
        'description'=>$this->faker->realText(100),
    ];
});
