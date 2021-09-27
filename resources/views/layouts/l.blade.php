<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">

<style>
    audio{
    }
</style>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="https://www.al-quran.cc/favicon.ico"> --}}
    <link rel="stylesheet" type="text/css" href="https://www.al-quran.cc/css/layout.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Droid+Serif">
    {{-- <title>The Holy Quran | Quran Translate</title> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body>

    @include('layouts.navbar')

    @yield('content')




<!-- Scripts -->
</body>

@yield('script')
</html>
