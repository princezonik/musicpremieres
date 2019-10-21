@extends('layouts.app')
@include('layouts.partials._navbar')
@include('layouts.partials._indexCarousel')


@section('content')
<div class="container">
  <div class="row">
    <div class="new-release col-10 ">
      <p id="follow-us">Follow Us</p>
      <p><strong>New Release</strong></p>
            @foreach($albums as $album)
                <div class="release-container">
                    <a class="" href="{{ route('download',[$album->id, $album->album_name])}}"><img class=" img-fluid rounded float-left" src="{{asset('storage/' .$album->image)}}" alt=""></a>
                    <a class="" href="{{ route('download',[$album->id])}}"><p >{{$album->album_name}}</p></a>
                    <a class="" href="{{ route('download',[$album->id])}}"> <p>{{$album->artist_name}}</p> </a>
                </div>
            @endforeach
    </div>
  </div>

    <div class="row">
        <div class="new-songs col-10 ">
            <p ><strong>New songs</strong></p>
            @foreach($songs as $song)
                <div class="songs-container">
                       <div> <a class="" href="{{ route('download', [$song->id]) }}"> <img class=" img-fluid rounded float-left" src="{{asset('storage/' .$song->image)}}" alt=""></a></div>
                        <div class="songs-container-details">
                         <a class="" href=""><p>{{$song->song_name}}</p></a>
                            <a class="" href=""><p>{{$song->artist_name}}</p> </a>
                        </div>
                </div>
            @endforeach
        </div>
    </div>
    <section>
        <div class="row">
            <div class="col-4"></div>
            <p>somehtin</p>
        </div>
    </section>

{{--    <div class="row">--}}
{{--        <div class="upcoming col-10">--}}
{{--            <p><strong>Upcoming</strong></p>--}}
{{--            @foreach($albums as $album)--}}
{{--                <div class="upcoming-container">--}}
{{--                    <a class="" href="{{route('download',[$album->image])}}"> <img class=" img-fluid rounded float-left" src="{{asset('storage/' .$album->image)}}" alt=""></a>--}}
{{--                    <a class="" href="{{route('download',[$album->album_name])}}"><p >{{$album->album_name}}</p></a>--}}
{{--                    <a class="" href="{{route('download',[$album->album_name])}}"> <p>{{$album->artist_name}}</p> </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="row">--}}
{{--        <div class="videos col-10">--}}
{{--            <p><strong>Videos</strong></p>--}}
{{--            @foreach($albums as $album)--}}
{{--                <div class="videos-container">--}}
{{--                    <a class="" href="{{route('download',[$album->image])}}"> <img class=" img-fluid rounded float-left" src="{{asset('storage/' .$album->image)}}" alt=""></a>--}}
{{--                    <a class="" href="{{route('download',[$album->album_name])}}"><p >{{$album->album_name}}</p></a>--}}
{{--                    <a class="" href="{{route('download',[$album->album_name])}}"> <p>{{$album->artist_name}}</p> </a>--}}
{{--                </div>--}}
{{--            @endforeach--}}
{{--        </div>--}}
{{--    </div>--}}

</div>


@endsection
