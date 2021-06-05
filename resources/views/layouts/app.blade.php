<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DOGE MUSIC</title>
    <link rel="stylesheet" href="{{mix("css/app.css")}}">

</head>
<body>
@php
    $route_name = request()->route()->getName();
    $isOnAuth = $route_name != "login" && $route_name != "register";
@endphp

@includewhen($isOnAuth,'layouts.navbar')

@yield('content')

@includewhen($isOnAuth,'layouts.footer')

@yield('js')
</body>
</html>
