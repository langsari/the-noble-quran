<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quran-th</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="{{ URL::to('css/navbar.css') }}">


 
    
    

   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  

<body>

<div class="topnav fixed-top ">
  
<a class="active" href="{{ route('homepage') }}">Al-Quran</a>
  <a href="{{ route('tafseer_home') }}">Tafsir</a>

  <a href="{{ route('login') }}">Log in</a>
  <a href="{{ route('register') }}">Register</a>
  <a href="{{ route('Tajweed') }}">Tajweed</a>



     <div class="search-container">
     <form action="{{ route('web.find') }}" method="GET">
      <input type="text" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
      <button type="submit">Search</button>
    </form>


    
  </div>
  
  </div>
</div>
<div style = background-color:#9be2cd; class=" row text-center ">

      <!-- Header -->
      <header class="masthead  text-white text-center">

<div style = background-color:#B3B6B7;>
  <h1 class="jumbotron-heading"></h1>
  <div class="row">
    <div class="col-md-3"></div>
    <div class="col-md-6">
    <br>
    <br>
      <img src="{{ URL::to('img/logo-lg-w.png') }}">
      <br><br>
      <h2 class="text-capitalize lead">Holy Al-Quran</h2>
      <div class="col-md-3"></div>
    </div>

  </div>
</div>
</div>
</header>
</div>

@yield('content')

</div>

<style>footer {
text-align: center;
padding: 3px;
background-color:#D0D3D4;
color: white;
}</style>
<body>

<footer>
<p>Al-Quran<br>
<p>Al-Quran@gmail.com<p></p>
</footer>

</body>
<div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>
</html>
</body>
</html>

            
           
