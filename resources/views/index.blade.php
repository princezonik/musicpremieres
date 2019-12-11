@extends('layouts.app')
@include('layouts.partials._navbar')
@include('layouts.partials._indexCarousel')



@section('content')

    <div class="container">
        <h4>Follow Us:</h4>
        <h1 class="category-header">
            New Releases
            <span class="see-more"><a href="" title="more">All New Releases &gt; </a></span>
        </h1>
        <div class="new-release-wrapper">
     
            @foreach ($albums as $album)
                
                <div class="album">
                    <a href="{{ route('download', [$album->id]) }}">
                        <div class="album-art">
                            <img src="{{asset('storage/' .$album->image)}}" alt="">
                        </div>
                        <div class="album-title-wrapper">
                            <div class="song-title">{{$album->album_name}}</div>
                            <div class="song-artist">{{$album->artist_name}}</div>
                        </div>
                    </a>
                </div>
            @endforeach
          
        </div>

        <h1 class="category-header">
                New songs
                <span class="see-more"><a href="" title="more">All New Songs &gt; </a></span>
            </h1> 
        <div class="new-songs-wrapper">   
            
            
            <div class="column">
                @foreach ($songs as $song)
                    
                        <a href="{{ route('download', [$song->id]) }}">
                            <div class="song">
                                <div class="song-art">
                                    
                                    <img src="{{asset('storage/' .$song->image)}}" alt="">
                                    
                                </div>
                               
                                <div class="song-title-wrapper">
                                    <div class="song-title">{{$song->song_name}}</div>
                                    <div class="song-artist">{{$song->artist_name}}</div>
                                </div>
                               
                            </div>
                        </a>
                     
                @endforeach
            </div> 

            <div class="column">
                @foreach ($songTwos as $songTwo)
                    
                        <a href="{{ route('download', [$songTwo->id]) }}">
                            <div class="song">
                                <div class="song-art">
                                    <img src="{{asset('storage/' .$songTwo->image)}}" alt="">
                                </div>
                                <div class="song-title-wrapper">
                                    <div class="song-title">{{$songTwo->song_name}}</div>
                                    <div class="song-artist">{{$songTwo->artist_name}}</div>
                                </div>
                            </div>
                        </a>
                        
                @endforeach
            </div> 
            <div class="column">
                @foreach ($songThrees as $songThree)
                    
                        <a href="{{ route('download', [$songThree->id]) }}">
                            <div class="song">
                                <div class="song-art">
                                    <img src="{{asset('storage/' .$songThree->image)}}" alt="">
                                </div>
                                <div class="song-title-wrapper">
                                    <div class="song-title">{{$songThree->song_name}}</div>
                                    <div class="song-artist">{{$songThree->artist_name}}</div>
                                </div>
                            </div>
                           
                        </a> 
                @endforeach
            </div> 
        </div>
        <h1 class="category-header">
                New Videos
                <span class="see-more"><a href="" title="more">All New Videos &gt; </a></span>
            </h1>
        <div class="new-video-wrapper">
     
                @foreach ($albums as $album)
                   
                    <div class="album">
                        <a href="{{ route('download', [$album->id]) }}">
                            <div class="album-art">
                                <img src="{{asset('storage/' .$album->image)}}" alt="">
                            </div>
                        </a>
                        
                            <div class="album-title-wrapper">
                                <a href="{{ route('download', [$album->id]) }}">
                                <div class="song-title">{{$album->album_name}}</div>
                                </a>
                                <a href="{{ route('download', [$album->id]) }}">
                                <div class="song-artist">{{$album->artist_name}}</div>
                                </a>
                            </div>
                    </div>
                @endforeach

               
          
        </div>
        <aside>
            <div class="sidebar section" id="sidebar-right">
                <div class="widget" id="HTML1">
                    <h2 class="title">Quick Links</h2>
                    <table>
                        <tbody>
                            <tr>
                                <td>
                                    <a href="">New Releases</a>
                                </td>
                                <td>
                                    <a href="">Recently Added</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">New Songs</a>
                                </td>
                                <td>
                                    <a href="">Top 50 Songs</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">New Albums</a>
                                </td>
                                <td>
                                    <a href="">Top 50 Albums</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">New EP</a>
                                </td>
                                <td>
                                    <a href="">Upcoming Albums</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="">All Music Videos</a>
                                </td>
                                <td>
                                    <a href="">ReUploads</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
            <hr />
            Popular This Week
        </aside> 
    </div> <!-- End of Container div -->
    

@endsection
