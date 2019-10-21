<?php

namespace App\Http\Controllers;

use App\Album;
use App\Song;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $songs = Song::all();
        $albums = Album::all();
        return view('index',compact('songs', 'albums'));
    }

    public function download_page($downloads){
        $song  = Song::find($downloads);
        $album = Album::find($downloads);
        return view('download', compact('song', 'album'));
  }


}
