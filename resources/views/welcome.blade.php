<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>The Noble Quran</title>
        <!--========== BOX ICONS ==========-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

         <!--========== CSS ==========-->
         <link rel="stylesheet" href="{{asset('css/styles.css')}}">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
           /* html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
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
            }*/

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 15px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body> 
        <!--========== HEADER ==========-->
        <header class="header">
            <div class="header__container">

            <div class="header__img">
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

        </div>
                <!--<img src="{{asset('img/GOOFY.png')}}" alt="" class="header__img">-->

                <a href="#" class="header__logo"></a> <!---Text-header-->
    
                <div class="header__search">
                    <input type="search" placeholder="Search" class="header__input">
                    <i class='bx bx-search header__icon'></i>
                </div>
    
                <div class="header__toggle">
                    <i class='bx bx-menu' id="header-toggle"></i>
                </div>
                

               <!--<div class="flex-center position-ref full-height">
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

        </div>-->

            </div>
        </header>

        <!--========== NAV ==========-->
        <div class="nav" id="navbar">
            <nav class="nav__container">
                <div>
                    <a href="{{ url('/') }}" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name ">The Noble Quran</span>
                    </a>
    
                    <div class="nav__list">
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Profile</h3>
    
                            <a href="#" class="nav__link active">
                                <i class='bx bx-home nav__icon' ></i>
                                <span class="nav__name">Home</span>
                            </a>
                            
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-user nav__icon' ></i>
                                    <span class="nav__name">Profile</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>

                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Passwords</a>
                                        <a href="#" class="nav__dropdown-item">Mail</a>
                                        <a href="#" class="nav__dropdown-item">Accounts</a>
                                    </div>
                                </div>
                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-message-rounded nav__icon' ></i>
                                <span class="nav__name">Messages</span>
                            </a>
                        </div>
    
                        <div class="nav__items">
                            <h3 class="nav__subtitle">Menu</h3>
    
                            <div class="nav__dropdown">
                                <a href="#" class="nav__link">
                                    <i class='bx bx-book nav__icon' ></i>
                                    <span class="nav__name">Surah</span>
                                    <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                                </a>
                                
                                <div class="nav__dropdown-collapse">
                                    <div class="nav__dropdown-content">
                                        <a href="#" class="nav__dropdown-item">Surah</a>
                                        <a href="#" class="nav__dropdown-item">Ayah</a>
                                        <a href="#" class="nav__dropdown-item">Verse</a>
                                        <a href="#" class="nav__dropdown-item"></a>
                                    </div>
                                </div>

                            </div>

                            <a href="#" class="nav__link">
                                <i class='bx bx-note nav__icon' ></i>
                                <span class="nav__name">Note</span>
                            </a>
                            <a href="#" class="nav__link">
                                <i class='bx bx-bookmark nav__icon' ></i>
                                <span class="nav__name">Saved</span>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="#" class="nav__link nav__logout">
                    <i class='bx bx-log-out nav__icon' ></i>
                    <span class="nav__name">Log Out</span>
                </a>
            </nav>
        </div>


        <!--Select surah or juzz-->
        <div class="container content-page__center col">
                <div class="">
                  <div class="tabs" data-controller="tabs">
                    <a id="tab--surah" class="tabs__item tabs__item--selected show-surah" data-target="#surah-list" data-tab="home-tabs" role="tab" aria-controls="surah-list" aria-selected="true">
                      <span class="th ">Show Surah</span>
                    </a>
            
                    <a id="tab--juz" class="tabs__item show-juz" data-target="#juz-list" data-tab="home-tabs" role="tab" aria-controls="juz-list" aria-selected="false">
                      <span class="th ">Show Juz</span>
                    </a>
                  </div>
                </div>
              </div>
              <!---end surah or juz-->

              
        <div class="container__surah__card">
          <!--<div class="surah-section" data-tab-group="home-tabs" id="surah-list">-->
              <div class="surah-list">
                
              </div> 

        </div> 
            


              
            






      


           <!-- <div class="content">
                <div class="title m-b-md">
                    The Noble Quran
                </div>

<<<<<<< HEAD
                <p>{{ date("d/m/Y H:i:s")}}</p>  แก้ที่ config/app.php----

=======
>>>>>>> parent of e0ce2ac (try)
                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
                
            </div>-->
        
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
                        
                        <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="ayah/${suarh.number}">
                <div class="surah-card">
                  <div class="surah-card__number">
                     Surah ${suarh.number}
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>${suarh.name.transliteration.en}</h5></div>
                      <div class="surah-card__english">
                        <p>${suarh.name.translation.en}</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>${suarh.name.long}</h2>
                    </div>
                  </div>
                </div>
              </a>

                                
                            `
                    });
                    surahList.innerHTML = dataPrint
                }
            )
    }
    getAllSurah()
</script>
</html>
