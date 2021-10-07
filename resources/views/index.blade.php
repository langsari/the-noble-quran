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

<body>

@include('navbar')
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
            <div class="surahsContainer">
                <!-- Where Surahs are viewed-->
            </div>
            
        </div>
    </section>
    <!--End of Quran sectionn -->


    <!-- Js File-->
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>