<!DOCTYPE html>
<html lang="en">

<head>
     <meta chaset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=0.1">
     <title>อัล-กุรอ่าน</title>
     <link rel="Stylesheet" href="">
     
     <!-- Latest compiled and minified CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>

 <!-- Favicon-->
 <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
</head>

<nav class="navbar navbar-light bg-info">

<div class="container-fluid">
    
         <h4><span class="text-white">AL-QUR'AN</span></h4>
    </a>
         
     <a  class="nav-link bg-info text-white " style="margin-left: auto;" aria-current="page" href="/login">LOGIN</a>
     

     
     <div class="dropdown">
          <butto class="btn btn-outline-info text-white dropdown-toggle" type="buttom" id="language" data-toggle="dropdown" aria-expanded="false">
               MENU
               </butto>
               <ul class="dropdown-menu dropdown-menu-info" aria-labelledby="language" style="margin-right:0px">
                  <li><a class="dropdown-item" href="">Audio</a></li>
                  <li><a class="dropdown-item" href="">Tafsir</a></li>

               </ul>

     </div>

</div>

</nav>
<div id="mySidenav" class="sidenav">


          <hr class="mt-5" style="background-color: white;">
          </div>
</div>


<audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>

          <p class="text-right">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</p>
          <h5> <p class="text-left"><h7>In the Name of Allah—the Most Compassionate, Most Merciful.</h7></p></h5> 

<!-- add audio  ** audio controls autoplay>
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
</audio> -->

          <hr>
       <!-- audio -->
       <audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <p class="text-right mt-5">اَلْحَمْدُ لِلّٰهِ رَبِّ الْعٰلَمِيْنَۙ</p>
          <h5>  <p class="text-left"><h7>All praise is for Allah—Lord of all worlds,</h7></p></h5> 
          <hr>
           <!-- audio -->
           <audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <p class="text-right mt-5">الرَّحْمٰنِ الرَّحِيْمِۙ</p>
          <h5>  <p class="text-left"><h7>the Most Compassionate, Most Merciful,</h7></p></h5> 
          <hr>

           <!-- audio -->
           <audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <p class="text-right mt-5">مٰلِكِ يَوْمِ الدِّيْنِۗ</p>
          <h5> <p class="text-left"><h7>Master of the Day of Judgment.</h7></p></h5> 
          <hr>
           <!-- audio -->
           <audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <p class="text-right mt-5">اِيَّاكَ نَعْبُدُ وَاِيَّاكَ نَسْتَعِيْنُۗ</p>
          <h5> <p class="text-left"><h7>You ˹alone˺ we worship and You ˹alone˺ we ask for help.</h7></p></h5> 
          <hr>
          <!-- audio -->
          <audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <p class="text-right mt-5">اِهْدِنَا الصِّرَاطَ الْمُسْتَقِيْمَ ۙ</p>
          <h5> <p class="text-left"><h7>Guide us along the Straight Path,</h7></p></h5>
          <hr>
           <!-- audio -->
           <audio controls >
             <source src="horse.ogg" type="audio/ogg">
            <source src="audio/001.mp3" type="audio/mpeg">
            Your browser does not support the audio element.
          </audio>
          <p class="text-right mt-5">صِرَاطَ الَّذِيْنَ اَنْعَمْتَ عَلَيْهِمْ ەۙ غَيْرِ الْمَغْضُوْبِ عَلَيْهِمْ وَلَا
               الضَّاۤلِّيْنَ</p>
              <h5><p class="text-left"><h7>the Path of those You have blessed—not those You are displeased with, or those who are
               astray.</h7> </p></h5>
          <hr>
        
                    
                    
                    

                       
                          @yield('content')
                    
                          </html>