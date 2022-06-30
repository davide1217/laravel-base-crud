@extends('layout.main')

@section('content')
    @foreach ($comics as $comic)
        <div>
            <h2>Title: <br> {{ $comic->title }}</h2>
            <img src="{{ $comic->image }}" alt="">
            <h2><a href="{{ route('comics.show', $comic) }}">show</a></h2>
            <h2><a href="{{ route('comics.edit', $comic) }}">show</a></h2>
        </div>
    @endforeach
@endsection
