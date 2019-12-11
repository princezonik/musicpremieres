<?php

namespace App\Http\Controllers;

use App\Album;
use App\Song;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){

        $songs = Song::orderBy('created_at', 'desc')->skip(0)->take(5)->get();
        $songTwos = Song::orderBy('created_at', 'desc')->skip(5)->take(5)->get();
        $songThrees = Song::orderBy('created_at', 'desc')->skip(10)->take(5)->get();
        $albums = Album::orderBy('created_at', 'desc')->get();
        return view('index',compact('songs', 'songTwos','albums','songThrees'));
    }

    public function download_page($downloads){
        $song  = Song::find($downloads);
        $album = Album::find($downloads);
        return view('download', compact('song', 'album'));
  }


}
