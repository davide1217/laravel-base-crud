@extends('layout.main')

@section('content')
    <div id="index" class="container">
        <div class="row">

            @foreach ($comics as $comic)
            <div class="_col col-3 p-3">
                <h2>Title: <br> {{ $comic->title }}</h2>
                <section>
                    <img src="{{ $comic->image }}" alt="">
                    <div class="form">
                        <a class="btn-dark btn text-uppercase" href="{{ route('comics.show', $comic) }}">show</a>
                        <a class="btn-primary mx-3 btn text-uppercase" href="{{ route('comics.edit', $comic) }}">edit</a>
                        <form action="{{ route('comics.destroy', $comic) }}" method="POST">
                            @csrf
                            @method("DELETE")
                            <input class="btn-danger btn text-uppercase" type="submit" value="delete">
                        </form>
                    </div>
                </section>
            </div>
            @endforeach

        </div>
    </div>
@endsection
