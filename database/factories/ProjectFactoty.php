<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use App\Groups;
use App\Students;

$factory->define(Groups::class, function (Faker $faker) {
    $faker = \Faker\Factory::create('ru_RU');
    return [

        'title' => rand(1, 50),
        'description' =>$faker->unique()->city,
        'average_math' =>$faker->unique()->word,
        'average_rus' => $faker->unique()->name,
        'average_eng' =>$faker->unique()->e164PhoneNumber

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
