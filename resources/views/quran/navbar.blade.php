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


  
    
   <!-- JavaScript Bundle with Popper -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</head>



<body>

<div class="topnav">
<a class="active" href="{{ route('homepage') }}">Quran.th</a>
  <a href="{{ route('tafseer_home') }}">ตัฟซีร</a>

  <a href="{{ route('login') }}">เข้าสู่ระบบ</a>
  <a href="{{ route('register') }}">สมัคร</a>

  <div class="search-container">
     <form action="{{ route('web.find') }}" method="GET">
      <input type="text" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
      <button type="submit">ค้นหา</button>
    </form>
  </div>
</div>

<div class="header-dark">
<div class="text">อัลกุรอาน</div>
</div>
</div>
   
		</div>

        @yield('content')

        </div>

    <style>footer {
    text-align: center;
    padding: 3px;
    background-color:#9be2cd;
    color: white;
    }</style>
    <body>

<footer>
  <p>Quran.th<br>
  <p>suraiya1707@gmail.com<p></p>
</footer>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </div>
 
</body>
</html>
