<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>القرأن</title>
    <!-- Fonts Links Are in Description -->
    <!-- thuluth decorated Font-->
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=thuluth-decorated" />
    <!-- Cairo Font-->
    <link rel="stylesheet" type="text/css" href="https://www.fontstatic.com/f=cairo-bold" />
    <!-- Font AWesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />

    <!-- Main Style -->
    <link rel="stylesheet" href="Home/style.css">
    <!--Start Ramadan countdown Section-->
    <link rel="stylesheet" href="styles/styles.css">
    <link rel="stylesheet" href="css/scrollBtn.css">


    <!--End Ramadan countdown Section-->

</head>

<body>
    <div class="full-width">
        <header class="header" style="direction: ltr">
            <div class="nav">

                <div class="logo btn">دعوة<span style="font-size:1.2rem; margin-right:15px">DAKWAH</span></div>

                <ul>
                    <li data-filter="main" class="active">HOME PAGE</li>
                    <li data-filter="hadith">HADITHS</li>
                    <li data-filter="lectures">LECTURES</li>
                    <li data-filter=""><a href="{{ route('Al_quran.home') }}">QURAN</a></li>
                    <li data-filter=""><a href="{{ route('nasiha.index') }}">BLOG</a></li>
                    <li data-filter="pray">PRAY TIME</li>
                    <li data-filter="footer">CONTACT US</li>
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('user.login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('user.register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('user.register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else

                        <li class="nav-item dropdown" style="display: inherit;">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('user.home') }}"
                                role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a style="margin-left: 10px;" class="dropdown-item" href="{{ route('logout') }} "
                                    onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest

                </ul>
                <li>
                    <label class="switch">
                        <input type="checkbox" onclick="changeMode()">
                        <span class="slider"></i></span>
                    </label>
                </li>
                <div class="bars">
                    <i class="fas fa-bars"></i>

                </div>
            </div>

        </header>
    </div>
    <!--Main Section -->
    <section class="main">
        <div class="container">
            <div class="title">
                <h2>
                    Welcome To
                    <br>
                    DAKWAH Website
                </h2>
                <button class="btn">
                    Start Explore
                    <i class="fas fa-caret-left"></i>
                </button>
            </div>
        </div>
    </section>
    <!--end of Main Section-->
    <!--Contents section-->
    <section class="Contents" style="height: height: 100vh;">
        <h3>Content</h3>
        <div class="Contents"
            style="display: flex; justify-content: space-evenly;flex-wrap: wrap;margin: 3rem 0;gap: 50px;">

            <ul style="display: contents;">
                <a href="{{ route('Al_quran.home') }}">
                    <div class="box">
                        <img style="height: 100px; width:100px;border-radius: 15%;"
                            src="{{ asset('Home/images/quran.png') }}" alt="">
                        <h3>
                            Quran
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                    </div>
                </a>
                <li href="" data-filter="hadith">
                    <div class="box">

                        <img style="height: 100px; width:100px;border-radius: 15%;"
                            src="{{ asset('Home/images/muslim.png') }}" alt="">
                        <h3>
                            Hadith
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                    </div>
                </li>
                <li data-filter="lectures">
                    <div class="box">
                        <img style="height: 100px; width:100px;border-radius: 15%;"
                            src="{{ asset('Home/images/lecture.png') }}" alt="">
                        <h3>
                            Lectures
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                    </div>
                </li>
                <li data-filter="pray">
                    <div class="box">
                        <img style="height: 100px; width:100px;border-radius: 15%;"
                            src="{{ asset('Home/images/praying.png') }}" alt="">
                        <h3>
                            Pray Time
                        </h3>
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit.
                        </p>

                    </div>
                </li>

            </ul>
        </div>
    </section>
    <!-- End of Hadith section -->

    <!--Hadith section-->
    <section class="hadith">
        <h3>HADITHS</h3>
        <div class="container">
            <div class="hadithContainer">
            </div>
            <div class="buttons">
                <div class="prev">PREVIEW</div>
                <div class="number">1 / 300</div>
                <div class="next">NEXT</div>
            </div>
        </div>
    </section>
    <!-- End of Hadith section -->
    <!-- Lectures Section -->
    <section class="lectures">
        <h3>LECTURES</h3>
        <div class="container">
            <div class="lectures-container">
                <div class="right">
                    <div class="lec">
                        <div class="lec-text">
                            <h4>لماذا نزل القران عربيآ</h4>
                            <p>محاضرة رائعة من تقديم فضيلة الشيخ الشعراوي</p>
                        </div>
                        <img src="Home/images/3.jpg" alt="">
                    </div>
                    <div class="lec">
                        <div class="lec-text">
                            <h4>لماذا نزل القران عربيآ</h4>
                            <p>محاضرة رائعة من تقديم فضيلة الشيخ الشعراوي</p>
                        </div>
                        <img src="Home/images/3.jpg" alt="">
                    </div>
                    <div class="lec">
                        <div class="lec-text">
                            <h4>لماذا نزل القران عربيآ</h4>
                            <p>محاضرة رائعة من تقديم فضيلة الشيخ الشعراوي</p>
                        </div>
                        <img src="Home/images/3.jpg" alt="">
                    </div>
                    <div class="lec">
                        <div class="lec-text">
                            <h4>لماذا نزل القران عربيآ</h4>
                            <p>محاضرة رائعة من تقديم فضيلة الشيخ الشعراوي</p>
                        </div>
                        <img src="Home/images/3.jpg" alt="">
                    </div>
                </div>
                <div class="left">
                    <iframe src="https://www.youtube.com/embed/631L-aGzfAE" frameborder="0"></iframe>
                    <p>محاضرة شيقة من تقديم فضيلة الشيخ حازم شومان</p>
                </div>
            </div>
        </div>
    </section>
    <!--End of lectures Section-->
    <!--Pray Time Section-->
    <section class="pray">
        <h3>PRAY TIME</h3>
        <div class="container">
            <div class="cards">
                <div class="card">
                    <div class="circle">
                        <svg>
                            <Circle cx="100" cy="100" r="100"></Circle>
                        </svg>
                        <div class="praytime">2:30</div>
                    </div>
                    <p>Sunset</p>
                </div>
            </div>
        </div>
    </section>
    <!--End of Pray Time Section-->

    <!--Start Ramadan countdown Section-->


    <div id="ramadan">
        <div class="containerrr ">
            <div class="containerrr__content">
                <img class="containerrr__moon" src="images/moon.svg" alt="moon">

                <div class="containerrr__shapes">
                    <div class="containerrr__shape">
                        <img class="containerrr__shapeImg" src="images/islamic-shapes.svg" alt="islamic-shape">
                    </div>
                    <div class="containerrr__shape">
                        <img class="containerrr__shapeImg" src="images/islamic-shapes.svg" alt="islamic-shape">
                    </div>
                    <div class="containerrr__shape">
                        <img class="containerrr__shapeImg" src="images/islamic-shapes.svg" alt="islamic-shape">
                    </div>
                    <div class="containerrr__stars">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                        <img class="containerrr__star" src="images/star.svg" alt="islamic-shape">
                    </div>
                </div>

                <p class="containerrr__text" style="font-size: 32px">
                    <span style="color:#fff;">RAMADAN</span>
                    <span class="containerrr__specialWord">COUNTDOWN</span>
                </p>

                <p class="containerrr__remaining">
                    <span style="color:#fff;font-size:45px;" class="containerrr__remainingTime">--</span>
                    <span style="color:#fff;font-size:20px;">Day</span>
                </p>
            </div>
        </div>

    </div>






    <!--End Ramadan countdown Section-->


    <!--Footer-->
    <section class="footer">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#43a047" fill-opacity="1" d="M0,160L30,176C60,192,
    120,224,180,234.7C240,245,300,235,360,218.7C420,203,480,181,540,
    181.3C600,181,660,203,720,202.7C780,203,840,181,900,149.3C960,117,
    1020,75,1080,80C1140,85,1200,139,1260,160C1320,181,1380,171,1410,
    165.3L1440,160L1440,320L1410,320C1380,320,1320,320,1260,320C1200,
    320,1140,320,1080,320C1020,320,960,320,900,320C840,320,780,320,720,
    320C660,320,600,320,540,320C480,320,420,320,360,320C300,320,240,320,
    180,320C120,320,60,320,30,320L0,320Z"></path>
        </svg>
        <div class="social">
            <a href=""><i class="fab fa-facebook"></i></a>
            <a href=""><i class="fab fa-instagram"></i></a>
            <a href=""><i class="fab fa-twitter"></i></a>
            <a href=""><i class="fab fa-telegram"></i></a>
            <a href=""><i class="fab fa-youtube"></i></a>
        </div>
    </section>
    <!--End Footer-->
    <!--Scroll Top-->
    <div class="scrollBtn active">
        <i class="fas fa-angle-double-up"></i>
    </div>
    <!--js File-->
    <!--Start Ramadan countdown Section-->
    <script src="scripts/moment.js"></script>
    <script src="scripts/moment-hijri.js"></script>
    <script src="scripts/scripts.js"></script>

    <!--End Ramadan countdown Section-->
    <script src="Home/main.js"></script>
    <script src="js/scroll.js"></script>


</body>
