<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

       

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap Icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- SimpleLightbox plugin CSS-->


        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />

        <link rel="stylesheet" href="{{asset('css/app.css')}}">

        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        
        <link rel="stylesheet" href="Home/style.css">
   
        <!--Quran css-->
        <link rel="stylesheet" type="text/css" href="https://www.al-quran.cc/css/layout.css" />

       
 
        <!--font-->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Droid+Serif">


         {{-- title-icon --}}
    <link rel="shortcut icon" href="{{ ('img/icons/android-chrome-192x192-6331911b35ae75f9e031df7d5b3cdd6ebd746e6ce29e139b33896c5b162d6e00.png') }}" type="image/x-icon">



        <title>@yield('title')</title>


    </head>
    <body>


        @yield('content')





        

        
          
        <script src="{{ asset('js/app.js') }}"></script>

        <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    
        <script src="{{ asset('js/main.js') }}"></script>
    
        
        
    </body>
  
</html>