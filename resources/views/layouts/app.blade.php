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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,maximum-scale=1,user-scalable=no">
    {{-- <link rel="shortcut icon" type="image/x-icon" href="https://www.al-quran.cc/favicon.ico"> --}}
    <link rel="stylesheet" type="text/css" href="https://www.al-quran.cc/css/layout.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Droid+Serif">
    {{-- <title>The Holy Quran | Quran Translate</title> --}}
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Fonts Links Are in Description -->
    <!-- thuluth decorated Font-->
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=thuluth-decorated" />
    <!-- Cairo Font-->
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=cairo-bold" />

</head>


<body>

    @include('layouts.navbar')

    @yield('content')




<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>

@yield('script')
</html>
