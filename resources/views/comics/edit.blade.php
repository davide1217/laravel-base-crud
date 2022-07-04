@extends('layout.main')

@section('content')
    <div class="_container">
        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf
            @method("PUT")

            <label for="title">Title:</label>

            @error('title')
                <div>{{ $message }}</div>
            @enderror

            <input name="title" type="text"
            @if (!$errors->any())
                value="{{ $comic->title }}"
            @else
                value="{{ old('title') }}"
            @endif
            class="form-control @error('title') is-invalid @enderror"
            placeholder="Insert the title">


            <label for="image">image-url:</label>

            @error('image')
                <div>{{ $message }}</div>
            @enderror

            <input name="image" type="text"
            @if (!$errors->any())
                value="{{ $comic->image }}"
            @else
                value="{{ old('image') }}"
            @endif
            class="form-control @error('image') is-invalid @enderror"
            placeholder="Insert the image URL">


            <label for="type">type:</label>

            @error('type')
                <div>{{ $message }}</div>
            @enderror

            <input name="type" type="text"
            @if (!$errors->any())
                value="{{ $comic->type }}"
            @else
                value="{{ old('type') }}"
            @endif
            class="form-control @error('type') is-invalid @enderror"
            placeholder="Insert the type">

            <input type="submit" value="crea">

        </form>
    </div>
@endsection
