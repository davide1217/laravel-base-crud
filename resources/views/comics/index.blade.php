@extends('layout.main')

@section('content')
    @foreach ($comics as $comic)
        <div>
            <h2>Title: {{ $comic->title }}</h2>
            <img src="{{ $comic->image }}" alt="">
            <h2><a href="comics/{{$comic->id}}">show</a></h2>

        </div>
    @endforeach
@endsection
