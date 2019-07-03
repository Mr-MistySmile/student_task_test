<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Groups;
use App\Students;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'title' => $faker->unique()->city,
        'description' => $faker->unique()->word,
        'average_math' => rand(2, 5),
        'average_rus' => rand(2, 5),
        'average_eng' => rand(2, 5),
        //'average_mark' => (('average_math'+'average_rus'+'average_eng')/3)
    ];
});

$factory->define(Students::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [
        'name' => $faker->unique()->name,
        'birthday' => $faker->date

    ];
});
