<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
   protected $guarded = [];
   public function artist(){
       return $this->belongsTo(\App\Artist::class);
   }
}
