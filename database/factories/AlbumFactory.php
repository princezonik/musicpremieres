<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'artist_name' => $faker->name,
       'album_name' => $faker->word,
        'genre' => $faker->word,
        'label' => $faker->word,
        'download_link' => $faker->word,
        'track_list' => $faker->paragraph,
        'release_date' => $faker->date(),
        'image' => $faker->image('public/storage/uploads',300,300, null, false),

    ];
});
