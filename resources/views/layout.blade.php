<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Este es mi home</h1>
    <nav>
    <ul>
        <li><a href="{{ route('home') }}">home</a></li>
        <li><a href="{{ route('portfolio') }}">portfolio</a></li>
        <li><a href="{{ route('about') }}">about</a></li>
        <li><a href="{{ route('contact') }}">contact</a></li>
    </ul>
</nav>
@yield('content')
</body>
</html>
