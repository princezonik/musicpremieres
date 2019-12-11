<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;


$factory->define(App\Song::class, function (Faker $faker) {
    return [
       'song_name' => $faker->word,
       'artist_name' => $faker->name,
       'genre' => $faker->word,
       'category' => $faker->word,
       'label' => $faker->word,
       'download_link' => $faker->url,
       'download_link_two' => $faker->url,
       'download_link_three' => $faker->url,
        'track_list' => $faker->paragraph,
       'release_date' => $faker->date,
       'image' => $faker->image('storage/public/uploads',300,300, null, false),
    ];

  // $filepath = storage_path('storage/');
//
//    if(!File::exists($filepath)){
//        File::makeDirectory($filepath);  //follow the declaration to see the complete signature
//    }
});
