<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Artist;
use Faker\Generator as Faker;

$factory->define(App\Artist::class, function (Faker $faker) {
    return [
        'artist_id' => $faker->unique()->randomNumber($nbDigits = 2),
        'artist_name' => $faker->name,
        'record_label' => $faker->word
    ];
});
