<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        'title' => $faker -> sentence(2),
        'subtitle' => $faker -> sentence(3),
        'release_date' => $faker -> date(),
    ];
});
