<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qur'an Al-Kareem</title>
    <!--bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!--Quran css-->
    <link rel="stylesheet" type="text/css" href="https://www.al-quran.cc/css/layout.css" />
    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Droid+Serif">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head>
@include('navbar')
<body>
    <!--quran section-->
    <section class="quran">
        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <h1 class="content-title" style="text-align: center;">Surah / Chapter</h1>
            </div>
        </div>
    
        <div class="container">
            <div class="surahasContainer">
                <!-- Where Ayat are viewed-->
            </div>
            
        </div>
    </section>
    <!--End of Quran sectionn -->
    <!-- Pop UP-->
    <div class="surah-popup">
        <div class="close-popup">
            <i class="fas fa-times">X</i>
        </div>
            <div class="container my-5">


        <p class="text-center " id="surah_title"></p>
               

        <!-- Start Sub Nav Bar -->
        <div class="row d-flex justify-content-center  my-5 text-center">

            <nav class="navbar navbar-light bg-light">
                <p class=" text-center">

                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#surah_info_section"
                        aria-expanded="false" aria-controls="collapseExample">
                        Surah Info
                    </button>

                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        Video
                    </button>

                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#surah_read_section"
                        aria-expanded="false" aria-controls="collapseExample" id="ReadSurah">
                        Read Surah
                    </button>


                </p>
            </nav>
        </div>
        <!-- End Sub Nav Bar -->
   
       <div class="ayat text-center">
        </div>

    <!-- Js File-->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>