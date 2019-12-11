<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Song extends Model
{
   protected $guarded = [];
   protected $attributes = [
    'single' => 1
  ];

  public function getActiveAttribute($attribute){
      return [
        0 => 'Album',
        1 => 'Single'
      ][$attribute];
    }
  public function scopeActive($query){
      return $query->where('single', 1);
  }

  public function scopeInactive($query){
      return $query->where('Album', 0);
  }

   public function artist(){
       $this->belongsTo(\App\Artist::class);
   }
}
