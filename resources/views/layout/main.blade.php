<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
        background-color: rgb(167, 167, 167);
        }
    </style>
    <title>Document</title>
</head>
<body>

    <ul>
        <li><a style="font-size: 1.2rem" href="/">home</a></li>
        <li><a style="font-size: 1.2rem" href="{{ route('comics.index')}}">comics</a></li>
        <li><a style="font-size: 1.2rem" href="{{ route('comics.create')}}">create a new comic</a></li>
    </ul>

    <section>
        @yield('content')
    </section>

</body>
</html>
