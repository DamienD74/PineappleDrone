<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <link rel="stylesheet"  href="{{ asset('css/style.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<header>
    @include('header')
</header>
<main>
    @yield('content')
</main>
<footer>
    @include('footer')
</footer>
</body>
</html>
