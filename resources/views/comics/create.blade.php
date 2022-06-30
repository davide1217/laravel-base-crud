@extends('layout.main')

@section('content')
    <form action="{{route('comics.store')}}" method="POST">
        @csrf
        <label for="title">Title:</label>
        <input name="title" type="text">

        <label for="image">image-url:</label>
        <input name="image" type="text">

        <label for="type">type:</label>
        <input name="type" type="text">

        <input type="submit" value="crea">

    </form>
@endsection
