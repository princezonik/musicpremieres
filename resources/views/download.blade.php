@extends('layouts.app')
@include('layouts.partials._navbar')
@section('content')

<div class="container">
        {{--    @if($song->image)--}}
        <div class="page-container col-12">
            <div class=" artwork">
                <img src="{{asset('storage/' .$song->image)}}" alt="" class="thumbnail">

                <span class="artwork-title">
                    <p>New</p>
                    <p>{{$song->song_name}}</p>
                    <p>{{$song->artist_name}}</p>
                </span>
            </div>
           
            <div class="artwork-details">

                <p>Genre: {{$song->category}} </p>
                <p>Released: {{$song->release_date}}</p>
                <p>Label: {{$song->label}}</p>
            </div>
       
            {{--    @endif--}}
       

    <section id="tabs" class="links-tab">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Links</a>
                            <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Tracklist</a>
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Share</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>DOWNLOAD LINKS</th>

                                        <th>HOST</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a target="_blank" href="{{$song->download_link}}">Download Link 1</a></td>

                                        <td><a target="_blank" href="{{$song->download_link}}">{{$song->download_link}}</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="{{$song->download_link_two}}">Download Link 2</a></td>

                                        <td><a target="_blank" href="{{$song->download_link_two}}">{{$song->download_link_two}}</a></td>
                                    </tr>
                                    <tr>
                                        <td><a target="_blank" href="{{$song->download_link_three}}">Download Link 3</a></td>

                                        <td><a target="_blank" href="{{$song->download_link_three}}">{{$song->download_link_three}}</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <table class="table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Tracklist</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <p>...................</p>
                                </tbody>
                            </table>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <table class="table" cellspacing="0">

                                {{-- 
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

    <br>


</div>

    {{-- <div class="songs-by">
            <div class="container">
                <div class="artist-songs">

                </div>
                <div class="artist-albums">
                        <p> Albums BY: {{$song->artist_name}} </p>
                </div>
                <div class="artist-videos">
                        <p> Videos BY: {{$song->artist_name}} </p>
                </div>


            </div>

        </div> --}}
@endsection
