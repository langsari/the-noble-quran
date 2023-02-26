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

 
    
    <style>
    .highlight{ 
  background:#00FF00; 
  padding:1px; 
  border:#00CC00 dotted 1px; 
}
</style>

   

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  

<body class="bgdetail">
<div class="detail">
<div class="topnav">
  
<a class="active" href="{{ route('homepage') }}">Quran.th</a>
<ul> 
<li class="list active">
<a  href="{{ route('tafseer_home') }}">
  <span class="icon"><ion-icon name="book-outline"></ion-icon></span>
  <span class="text">ตัฟซีร</span>
</a>
</li>
<li class="list active"> 
<a href="{{ route('login') }}">
  <span class="icon"><ion-icon name="log-in-outline"></ion-icon></span>
  <span class="text">เข้าสู่ระบบ</span>
</a>
</li> 
<li class="list active">
<a href="{{ route('register') }}">
  <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
  <span class="text">สมัคร</span>
</a>
</li>
<div class="dark-light">
<li class="list active">
<a href="#" onclick="myFunction()">
  <span  class="icon"><ion-icon name="moon-outline" ></ion-icon></span>
  <span class="text">มืด</span>
</a>
</li>
</div>
<div class="indicator"></div>
</ul> 
<script>
  let list = document.querySelectorAll('.list');
  function setActiveClass(){
    list.forEach((item) =>
    item.classList.remove('active'));
    this.classList.add('active');
  }
  list.forEach((item) =>
  item.addEventListener('mouseover' , setActiveClass))
</script>
</div>
</div>

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


  <!--
  <div class="search-container">
  
     <form action="{{ route('web.find') }}" method="GET">
      <input type="text" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
      <button class="bi bi-search" type="submit">ค้นหา</button>
    </form>



      <body> 
  <input type="text" id="searchtxt" />
  <input type="button" value="search" onClick="replaceText();" id="highlightButton" />
  <p>
    
  </p> 
 </body> -->

  <!-- <form action="{{ route('web.find') }}" method="GET"> 

      <input type="text" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
      <button type="submit">ค้นหา</button>

      
    </form>  -->
    
    <!-- <div class="search-container">
    <body>
  <input type="text" id="searchtxt" />
  <input type="button" value="search" onClick="replaceText();" id="highlightButton" />
  <p>
    
  </p>  -->
<!--  

  <form action="{{ route('web.find') }}" method="GET"> 
    
      <input type="text" id="searchtxt" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
      <button type="submit" onClick="replaceText();" id="highlightButton">ค้นหา</button>
    <input type="button" value="search" onClick="replaceText();" id="highlightButton" /> 

      
    </form> 
    </body> 
   <script>
   function replaceText() {

$("body").find(".highlight").removeClass("highlight");

var searchword = $("#searchtxt").val();

var custfilter = new RegExp(searchword, "ig");
var repstr = "<span class='highlight'>" + searchword + "</span>";

// if (searchword != "") {
//     $('body').each(function() {
//         $(this).html($(this).html().replace(custfilter, repstr));
//     })
// }
}
   </script>
     <script>
   function replaceText() { 

$("body").find(".highlight").removeClass("highlight");

var searchword = $("#searchtxt").val();

var custfilter = new RegExp(searchword, "ig");
var repstr = "<span class='highlight'>" + searchword + "</span>";

if (searchword != "") {
    $('body').each(function() {
        $(this).html($(this).html().replace(custfilter, repstr));
    })
}
}
   </script>
     --> 

  </div>
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
background-color:#9be2cd;
color: white;
}</style>
<body>

<footer>
<p>Quran.th<br>
<p>suraiya1707@gmail.com<p></p>
</footer>

</body>
<div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</div>
</html>
</body>
</html>

            
           

