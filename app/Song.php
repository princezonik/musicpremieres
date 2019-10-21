<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
   protected $guarded = [];

   public function artist(){
       $this->belongsTo(\App\Artist::class);
   }
}
