<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(){
        $name = Request::get('name');
        $search = Request::get('search');
        // Perform the query using Query Builder
        $result = DB::table('song')
            ->select(DB::raw("*"))
            ->where('name', '=', $name)
            ->where('search', '=', $search)
            ->get();

        return view('search',compact($result));
    }
}
