<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ul>
        <li><a href="/">home</a></li>
        <li><a href="{{ route('comics.index')}}">comics</a></li>
        <li><a href="{{ route('comics.create')}}">create a new comic</a></li>
    </ul>

    <section>
        @yield('content')
    </section>

</body>
</html>