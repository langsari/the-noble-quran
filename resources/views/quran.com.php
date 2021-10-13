<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Noble Quran</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

        <!-- Styles -->
        <style>php artisan ui vue --auth
            html, body {
                background-color: rgb(0, 0, 0);
                color: #ffffff;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 1000;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
                
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
                
            }

            .content {
                text-align: center;
                margin-top: 15rem;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #ffffff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 300px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif


    <div class="content">

            <div class="container content-page">
                <div class="content-page__center col">
                  <img class="quran-logo" alt="quran.com logo" src="https://cdn.qurancdn.com/assets/quran-logo-f5d0f128f5aa2a1949a3157d96bbd04a184e4a4ee0e05d464a3f2ae8d0bdcbdf.png" />

                  <h1 class="green space-y-50"><p><p><p>
                    <span class='en '>The Noble Quran</span>
                  </h1>

                  <div class="space-y-15">
                    <div class="input-wrapper large">



                      <form action="/search" data-controller="search-form" data-expand=>
                        <input type="search"
                               name="query"
                               value=""
                               placeholder="Search &quot;Fatihah&quot;"
                               autocapitalize="none"
                               autocomplete="off"
                               autocorrect="off"
                               spellcheck="false"
                               aria-label="Search"
                               aria-haspopup="false"
                               role="combobox"
                               aria-autocomplete="list"/>
                        <button type="submit" class="quran-icon icon-search">
                        </button>
                        <div id="suggestions"></div>
                      </form>

                            </div>
                          </div>
                        </div>




    <div class="container">

    <!--  ใส่ลิงค์เว็บ <p>Quick links :&nbsp;&nbsp;<a style="text-decoration: none;" href="Al-fatihah.html">Al-Fatihah</a>&nbsp;<a href="" style="text-decoration:none">.....</a>&nbsp;&nbsp;|</p> -->

     <hr style="height:2px;border-width:0;color:rgb(0, 0, 0);background-color:rgb(0, 0, 0)">


         <!--  <P>Surah (Chapter) | Juzz</P> -->
          <hr style="width:11.6%;text-align:left;margin-left:0px;"><br>

     <div class="row text-center">
          <div class="col-sm">
                <a href="Al-fatihah.php"><button style="height: 120px; width:320px;"   type="buttom" class="btn btn-outline-info" ><span>Al-Fatihah</span> (The openner) <h4>ٱلْفَاتِحَة</h4></button></a>
          </div>
          <div class="col-sm">
               <a href="#"><button style="height: 120px; width:320px;"  type="button" class="btn btn-outline-info"> <span>Al-Baqarah</span> (The cow,the cow)
               <h4>ٱلْبَقَرَة</h4></button></a>
          </div>
          <div class="col-sm">
              <a href="tranlate.html"><button style="height: 120px; width:320px;"  type="button" class="btn btn-outline-info"><span>Al-Imran</span> (The family of imran)
          <h4>آلِ عِمْرَان</h4></button></a>
          </div>
     </div>
     <div class="row text-center mt-4">
         <div class="col-sm">

              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>An-Nisa</span> (The women)
              <h4>ٱلنِّسَاء</h4></button></a>
         </div>
         <div class="col-sm">
              <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Al-Maidah</span> (The food ,The repast ,The table)
                   <h4>ٱلْمَائِدَة</h4> </button>
         </div>
         <div class="col-sm">

              <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-An'am</span> (The cattle)
              <h4>ٱلْأَنْعَام</h4></button></a>
         </div>

    </div>
    <div class="row text-center mt-4">
        <div class="col-sm">

             <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>Al-A'raf</span> (The Heights, The Faculty of Discernment)
             <h4>ٱلْأَعْرَاف</h4></button></a>
        </div>
        <div class="col-sm">
             <button style="height: 120px; width:320px;" type="button" class="btn btn-outline-info"><span>Al-Anfal</span> (The Spoils of War)
                  <h4> ٱلْأَنْفَال</h4> </button>
        </div>
        <div class="col-sm">

             <a href="Al-fatihah.html"><button style="height: 120px; width:320px;"  type="buttom" class="btn btn-outline-info"><span>At-Tawbah</span> (The Repentance)
                  <h4>ٱلتَّوْبَة</h4></button></a>
        </div>

   </div>







    </body>
</html>
