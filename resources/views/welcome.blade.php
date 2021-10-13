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
                    <a href="#" class="nav__link nav__logo">
                        <i class='bx bxs-disc nav__icon' ></i>
                        <span class="nav__logo-name">The Noble Quran</span>
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
              
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                     Surah 1
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Opening</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>

              <!---->

              
              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 2
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Baqarah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    <div class="surah-card__arabic">
                      <h2>البَقَرَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              
              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 3
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Alay Imran</h5></div>
                      <div class="surah-card__english">
                        <p>Family Imran </p>
                      </div>
                    
                    <div class= "surah-card__arabic" >
                      <h2>آلِ عِمْرَان</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah  4
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>An-Nisa</h5></div>
                      <div class="surah-card__english">
                        <p>The Women</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>النِّسَاء</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah  5
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Maa’idahh</h5></div>
                      <div class="surah-card__english">
                        <p>The Table</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>المَائِدَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 6
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Araaf</h5></div>
                      <div class="surah-card__english">
                        <p>The Cattle</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2> الأَعْرَاف</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 7
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Araaf</h5></div>
                      <div class="surah-card__english">
                        <p>The Heights</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الأَعْرَاف</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 8
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Anfaal</h5></div>
                      <div class="surah-card__english">
                        <p>The Spoils of War</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الأَنْفَال</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 9
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Tawbah</h5></div>
                      <div class="surah-card__english">
                        <p>The Repentance</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>التَّوْبَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 10
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Yunus</h5></div>
                      <div class="surah-card__english">
                        <p>Jonah</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>يُونُس</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 11
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Hud</h5></div>
                      <div class="surah-card__english">
                        <p>Hood</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>هُود</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 12
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Yusouf</h5></div>
                      <div class="surah-card__english">
                        <p>Joseph</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>يُوسُف</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 13
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Ar-Ra’ad</h5></div>
                      <div class="surah-card__english">
                        <p>The Thunder</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الرَّعْد</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 14
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Ibrahim</h5></div>
                      <div class="surah-card__english">
                        <p>Abraham</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ِبْرَاهِيم</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 15
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Hijr</h5></div>
                      <div class="surah-card__english">
                        <p>The Rocky Tract</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الحِجْر</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 16
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Nahl</h5></div>
                      <div class="surah-card__english">
                        <p>The Bee</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>النَّحْل</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 17
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Israa</h5></div>
                      <div class="surah-card__english">
                        <p>TheJourney byNight</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الإِسْرَاء</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 18
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Kahf</h5></div>
                      <div class="surah-card__english">
                        <p>The Cove</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الكَهْف</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 19
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Maryam</h5></div>
                      <div class="surah-card__english">
                        <p>Mary</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>مَرْيَم</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 20
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Taha</h5></div>
                      <div class="surah-card__english">
                        <p>Ta-Ha</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>طٰهٰ</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 21
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Anbiya</h5></div>
                      <div class="surah-card__english">
                        <p>The Prophets</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الأَنْبِيَاء</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 22
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Hajj</h5></div>
                      <div class="surah-card__english">
                        <p>The Pilgrimage</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الحَجّ</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 23
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Muminun</h5></div>
                      <div class="surah-card__english">
                        <p>The Believers</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>المُؤْمِنُون</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 24
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Nur</h5></div>
                      <div class="surah-card__english">
                        <p>The Light</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>النُّور</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 25
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Farqan</h5></div>
                      <div class="surah-card__english">
                        <p>The Criterion</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الفُرْقَان</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 26
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Ash-Shu’ara</h5></div>
                      <div class="surah-card__english">
                        <p>The Poets</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الشُّعَرَاء</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 27
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Naml</h5></div>
                      <div class="surah-card__english">
                        <p>The Ant</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>النَّمْل</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 28
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Qasas</h5></div>
                      <div class="surah-card__english">
                        <p>The Narration</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>القَصَص</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah 29
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Ankabut</h5></div>
                      <div class="surah-card__english">
                        <p>The Spider</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>العَنْكَبُوت</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                   Surah 30
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Rum</h5></div>
                      <div class="surah-card__english">
                        <p>The Romans</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>الرُّوم</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    31
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    32
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    33
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    34
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    35
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    36
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    37
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    38
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    39
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->

            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    40
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    41
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    42
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    43
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    44
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    45
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    46
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    47
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    48
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    49
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    50
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    51
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    52
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    53
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    54
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    55
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    56
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    57
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    58
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    59
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    60
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    61
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    62
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    63
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    64
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    65
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    66
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    67
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    68
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    69
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    70
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    71
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    72
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    73
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    74
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                   75
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    76
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    77
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    78
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                   79
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    80
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    81
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    82
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    83
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    84
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    85
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    86
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    87
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    88
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    89
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    90
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    91
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    92
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                   93
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    94
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    95
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    96
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    97
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    98
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    99
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    100
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    101
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    102
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    103
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    104
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    105
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    106
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    107
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    108
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    109
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    110
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    111
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->
            <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    112
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->

              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    113
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
              <!---->


              <a data-controller="track" data-name="chapters" data-category="2-Al-Baqarah" href="/2">
                <div class="surah-card">
                  <div class="surah-card__number">
                    Surah : 114
                  </div>
              
                  <div class="surah-card__text">
                    <div class="surah-card__latin">
                      <h5>Al-Fatihah</h5></div>
                      <div class="surah-card__english">
                        <p>The Cow</p>
                      </div>
                    
                    <div class="surah-card__arabic">
                      <h2>ٱلْفَاتِحَة</h2>
                    </div>
                  </div>
                </div>
              </a>
            <!---->



              






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
</html>
