<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Album::class, function (Faker $faker) {
    return [
        'artist_name' => $faker->name,
       'album_name' => $faker->word,
        'genre' => $faker->word,
        'category' => $faker->word,
        'label' => $faker->word,
        'download_link' => $faker->url,
        'download_link_two' => $faker->url,
        'download_link_three' => $faker->url,
        'track_list' => $faker->paragraph,
        'release_date' => $faker->date(),
        'image' => $faker->image("{{asset('storage/')}}",300,300, null, false),

    ];
});
