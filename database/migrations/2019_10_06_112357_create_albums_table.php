<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlbumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->bigIncrements('id');
            //$table->integer('artist_id')->unsigned();
            $table->string('artist_name');
            $table->string('album_name');
            $table->string('genre');
            $table->string('label');
            $table->string('download_link');
            $table->text('track_list');
            $table->timestamp('release_date');
            $table->string('image');

            $table->timestamps();

           // $table->foreign('artist_id')->references('id')->on('artists')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albums');
    }
}
