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
<a class="active" href="{{ route('homeuser') }}">Quran.th</a>
  <a href="{{ route('tafseer_homeuser') }}">ตัฟซีร</a>
  <a href="{{ route('notes.index')}}">โน้ตของคุณ</a>
  <a href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('ออกจากระบบ') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>


                            


     <div class="search-container">
     <form class="top-1"action="{{ route('web.findsearch') }}" method="GET">
      <input type="text" placeholder="ค้นหา.." name="query" value="{{ request()->input('query') }}">
      <button type="submit">ค้นหา</button>
    </form>
   
    <div class="setbut"> 
    <div class="dropdown">
        <span><a class="setbut-1" href=""><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear-fill" viewBox="0 0 16 16">
          <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
             </svg></a> </span>
        <div class="dropdown-content">
        <ul> 
          <div class="but">  
          
              <a class="th" href=""><li>Thai</li></a>
              <a class="en" href=""><li>English</li></a>  
              <script>
              if(isset("th")){
    buttomse='th';
                  }
               else(isset("bu")){ 
    buttomse='en';
  } 

  switch( buttomse){

  case 'th':
    tha=<p class="t">{{$arabic->transliteration}}</p>      
    break; 
  case 'eni':
    eng=<p class="t">{{$arabic->thais->Text}}</p>
    break; 
  }
            </script>    
         
        </div>
      </div>
</div>
    
  </div>
  </div>
</div>

</div>
</div>
</header>
</div>
<br>

@yield('content')

</div>

<style>
 


 .buttomset{
  position:static;
  top: 10px;
  right: 10px; 
  left: 10px;
  bottom: 10px; 
  padding: 10px 10px; 
  background-color:gray;
}
.dropdown {
position: relative;
display: inline-block;
}

.dropdown-content {

position: absolute;
background-color: #f9f9f9; 
height: 150px; 
color: black; 

}

.dropdown:hover .dropdown-content {

position: relative;


}



form.top-1{  
  position: absolute;
  right: 450px; 
  top: 5px;
 
}

.top{ 
  position: relative;
  align-items: center;
}



footer {
text-align: center;
padding: 3px;
background-color:#E3963E;
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

            
           
