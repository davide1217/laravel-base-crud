@extends('layout.main')

@section('content')
    <h2>Title: <br> {{ $comic->title }}</h2>
    <img src="{{ $comic->image }}" alt="">
@endsection
