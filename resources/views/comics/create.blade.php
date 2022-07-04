@extends('layout.main')

@section('content')
    <div class="_container">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <label for="title">Title:</label>
            @error('title')
                <div>{{ $message }}</div>
            @enderror
            <input name="title" type="text"
            value="{{ old('title') }}"
            class="form-control @error('title') is-invalid @enderror"
            placeholder="Insert the title">


            <label for="image">image-url:</label>
            @error('image')
                <div>{{ $message }}</div>
            @enderror
            <input name="image" type="text"
            value="{{ old('image') }}"
            class="form-control @error('image') is-invalid @enderror"
            placeholder="Insert the image url">


            <label for="type">type:</label>
            @error('type')
                <div>{{ $message }}</div>
            @enderror
            <input name="type" type="text"
            value="{{ old('type') }}"
            class="form-control @error('type') is-invalid @enderror"
            placeholder="Insert the comic type">

            <input type="submit" value="crea">

        </form>
    </div>
@endsection
