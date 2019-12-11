<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Album $albums){
        $albums = Album::all();
        $this->storeImage($albums);
         return view('admin.uploads', compact('albums'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Album $albums){
        $albums = new Song();
        return view('admin.uploads', compact('albums'));
    }
 
     public function store(Song $albums){
 
        if ('category' == 'album'){
            $albums = Album::create($this->validateAlbumRequest());
            $this->storeImage($albums);
        }else if('category' == 'single'){
            $albums = Song::create($this->validateRequest());
            $this->storeImage($albums);
        }else {
           dd($albums);
        }
         
         return redirect('admin/uploads');
     }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Song $songs)
    {
        return view('adminDash', compact('musics'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function validateRequest(){

        return \request()->validate([
            'artist_name' => 'required | min: 3',
            'song_name' => 'required| min: 3',
            'genre' => 'required| min: 3',
            'category' => 'required',
            'label' => 'required| min: 3',
            'download_link' => 'required',
            'download_link_two' => 'required',
            'download_link_three' => 'required',
            'track_list' => 'required',
            'release_date' => 'required | date',
            'image' => 'file | image | max: 7000'


        ]);
    }

   private function validateAlbumRequest(){
       return \request()->validate([
           'artist_name' => 'required | min: 3',
           'album_name' => 'required',
           'genre' => 'required',
           'category' => 'required',
           'label' => 'required| min: 3',
           'download_link' => 'required',
           'download_link_two' => 'sometimes',
           'download_link_three' => 'sometimes',
           'track_list' => 'required',
           'release_date' => 'required | date',
           'image' => 'file | image | max: 7000'

       ]);
   }

    public function storeImage($albums){
        if(request()->has('image')){
            $songs->update([
                'image' => request()->image->store('uploads', 'public'),
            ]);

            $image = Image::make(public_path('storage/'. $songs->image))->fit(300,300);
            $image->save();
        }
    }
}
