<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Groups;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'title' => $faker->unique()->city,
        'description' => $faker->unique()->word
    ];
});
