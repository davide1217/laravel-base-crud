@extends('layout.main')

@section('content')
    <h2>Title: {{ $comic->title }}</h2>
    <img src="{{ $comic->image }}" alt="">
@endsection
