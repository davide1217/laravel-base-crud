@extends('layout.main')

@section('content')
    <form action="{{route('comics.update', $comic)}}" method="POST">
        @csrf
        @method("PUT")

        <label for="title">Title:</label>
        <input value="{{ $comic->title }}" name="title" type="text">

        <label for="image">image-url:</label>
        <input value="{{ $comic->image }}" name="image" type="text">

        <label for="type">type:</label>
        <input value="{{ $comic->type }}" name="type" type="text">

        <input type="submit" value="crea">

    </form>
@endsection
