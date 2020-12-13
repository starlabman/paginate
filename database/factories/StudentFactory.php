<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->email,
        'age' => $faker->boolean(75) ? $faker->numberBetween(18,25) : $faker->nulberBetween(14,17),

    ];
});
