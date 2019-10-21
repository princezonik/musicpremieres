<div class=" album-form form-group col-6">

    <p>Album Section</p>
    <div class="form-group">
        <label for="artistName">Artist Name</label>
        <input type="text" class="form-control" name="artist_name" id="artist_name" placeholder="Enter Artist Name"  required>
        {{--        {{ $errors->first('artist_name') }}--}}
    </div>

    <div class="form-group">
        <label for="songName">Album Name</label>
        <input type="text" class="form-control" id="song_name" name="song_name"  placeholder="Enter Song Name"  required>
        {{--        {{ $errors->first('song_name') }}--}}
    </div>

    <div class="form-group">
        <label for="genre">Genre</label>
        <select class="form-control" name="genre" id="genre">
            @foreach($songs as $song)
                <option>{{$song->genre}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="category">Category</label>

        <select class="form-control" name="category" id="category">
            @foreach($songs as $song)
                <option>{{$song->category}}</option>
            @endforeach
        </select>
    </div>

    <div class="form-group">
        <label for="recordLabel">Record Label</label>
        <input type="text" class="form-control" id="inputRecordLabel" id="label" name="label" placeholder="Enter Record Label" required>
    </div>
    <div class="form-group">
        <label for="releaseDate">Release Date</label>
        <input type="date" class="form-control" id="release_date" name="release_date" required>
    </div>

    <div class="form-group d-flex flex-column" >
        <label for="image">Album Art</label>
        <input type="file" id="image"  name="image" required>
    </div>
</div>
