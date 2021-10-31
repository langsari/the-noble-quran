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
                background-color: rgb(255, 255, 255);
                color: #05c5ff;
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
                margin-top:290rem;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #05c5ff;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom:100rem;
            }
            .surah-list{
            /*position: relative;*/
            display: flex;
            /*padding: 2rem;*/
            flex-direction: row;
            flex-wrap: wrap;
            align-items: center;
             margin: 3rem 0 0 6rem;
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
                  <img class="quran-logo" alt="quran.com logo"  src="https://cdn.qurancdn.com/assets/quran-logo-f5d0f128f5aa2a1949a3157d96bbd04a184e4a4ee0e05d464a3f2ae8d0bdcbdf.png" />

                  <h1 class="green space-y-50"><p><p><p>
                    <span class='en '>The Noble Quran</span>
                  </h1>

                  <div class="space-y-15">
                    <div class="input-wrapper large">


                        <nav class="navbar navbar-light">
                            <div class="container-fluid">
                              <form class="d-flex">
                                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                              </form>
                            </div>
                          </nav>

                    </div>
                </div>







                <div class="container__surah__card">
                <!--<div class="surah-section" data-tab-group="home-tabs" id="surah-list">-->
              <div class="surah-list">

              </div>

        </div>




<!-- footer -->


    <!-- copyright -->
            <br>
            <p class="copyright">ⓒQuran.th</p>
            <p class="foot_logo"><span class="ico_foot_logo">The Noble Quran</span></p>


</div>
<!-- //footer -->
    </body>
    <script>
        let surahList = document.querySelector('.surah-list');
        function getAllSurah() {
            fetch("https://api.quran.sutanlab.id/surah")
                .then(res => res.json())
                .then(data => {
                        let dataPrint = '';
                        let suarhs = data.data;
                        // console.log(data.data)
                        suarhs.forEach(suarh => {
                            // console.log(suarh.name.long)
                            dataPrint += `
                            <div class="col-sm">
    <a href="ayat/${suarh.number}"><button style="height: 120px; width:320px;"   type="buttom" class="btn btn-outline-info" ><h3>${suarh.number}</h3><span>${suarh.name.transliteration.en}</span> ${suarh.name.translation.en} <h4>${suarh.name.long}</h4></button></a>
</div>

                                `
                        });
                        surahList.innerHTML = dataPrint
                    }
                )
        }
        getAllSurah()
    </script>
</html>
