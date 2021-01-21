<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Art Shop</title>
        {{-- favicon --}}
        <link rel="shortcut icon" href="https://img.icons8.com/plasticine/2x/paint-palette.png">
        <!-- Style -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    </head>
    <body>
        @include('partials.header')
        @yield('content')
    </body>
</html>
