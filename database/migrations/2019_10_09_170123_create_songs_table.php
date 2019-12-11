<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('song_name');
            $table->string('artist_name');
            $table->string('genre');
            $table->string('category');
            $table->string('label');
            $table->string('image');
            $table->string('download_link');
            $table->string('download_link_two');
            $table->string('download_link_three');
            $table->text('track_list');
            $table->timestamp('release_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('songs');
    }
}
