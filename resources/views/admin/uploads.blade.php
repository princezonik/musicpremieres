@extends('layouts.app')
@section('content')

    <div>
        <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @include('form')

            <button type="submit" class="btn btn-primary"> Add Music </button>
        </form>
    </div>
    <div>
{{--        <form action="{{ route('uploads.store') }}" method="post" enctype="multipart/form-data">--}}
{{--            @csrf--}}
{{--            @include('albumform')--}}
{{--            <button type="submit" class="btn btn-primary"> Add Music </button>--}}
{{--        </form>--}}
    </div>
@endsection
