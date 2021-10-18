<style>
    /*** Header **/


    .search-result-box {
        background: #fbfdfee6;
        position: absolute;
        width: 100%;
        color: black;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

    }

    .box-shadow {
        box-shadow: rgba(100, 100, 111, 0.2) 0px 5px 10px 0px;
    }

    #navbarTogglerDemo02>form {
        width: 40%;
    }

    @media screen and (max-width: 992px) {
        #navbarTogglerDemo02>form {
            width: 100%;
        }

    }


    #ss {
        text-decoration: none;
        color: #343a40;
    }

    .border-no-padding {
        /* border-bottom: solid #0000000f; */
    }

    .border-no-padding:hover {
        background: #f2f2f2;
        cursor: pointer
    }

    .pos-rel {
        position: relative;
        border-radius: 10px;
    }

    /* Hover on ayat change color */
    .hover-change-color:hover {
        background: #f8fafc;
    }

    .surah-list .item:hover {
        background: #f0f3f8;
    }



    .custom-play-audio-position {
        position: absolute;
        left: 1rem;
    }





    .header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        z-index: 1;
        transition: .5s all ease-in-out;
        width: 100%;
        background: rgb(0 0 0 / 75%);
        /* padding: 11px; */


    }

    .header .nav {
        display: flex;
        justify-content: space-around;
        align-items: center;
        height: 60px;
        color: #fff;
        transition: .5s all ease-in-out;
    }

    .header .active {
        background-color: fff;
    }

    .header.active .nav {
        height: 60px;
    }

    .header ul {
        display: flex;
    }

    .header ul li {
        position: relative;
        cursor: pointer;
        font-size: 0.9rem;
    }

    .header ul li a {
        position: relative;
        cursor: pointer;
        text-decoration: none;
        color: rgb(0, 0, 0);
    }

    .header ul li::after {
        content: "";
        position: absolute;
        bottom: -5px;
        right: 0;

        background-color: rgb(184, 184, 184);
        height: 4px;
        transition: .3s all ease-in-out;
        width: 0;
    }

    .header li.active::after,
    .header li.hover::after {
        width: 50px;
    }

    .header .bars {
        display: none;
    }

    .header li:not(:first-of-type),
    .header li:not(:last-of-type) {
        margin: 0 15px;
    }

    .header .logo {
        font-family: 'thuluth-decorated';
        font-size: 2.6rem;
        cursor: pointer;
    }


    ol,
    ul,
    dl {
        margin-top: 0;
        margin-bottom: 0;
    }

    .header .nav a {
        cursor: pointer;
        text-decoration: none;
        color: aliceblue;
    }

</style>


<div class="container" style="    margin-bottom: 150px;
;">

    <div class="header">

        <nav class="navbar navbar-expand-lg navbar-dark  container" style="direction: ltr">
            <a class="logo navbar-brand" href="{{ route('homePage') }}">دعوة<span
                    style="font-size:1.2rem; margin-right:15px">DA`WAH</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                    <li class="nav-item ">
                        <a class="nav-link" href="{{ route('Al_quran.home') }}">{{ __('words.QURAN') }}<span
                                class="sr-only">(current)</span></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homePage') }}">{{ __('words.HOME PAGE') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('homePage') }}" data-filter="hadith">{{ __('words.HADITH') }}</a>
                    </li>


                    {{-- Start Switch the language --}}
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            {{ LaravelLocalization::getCurrentLocale() }}
                        </a>
                        <div class="dropdown-menu">

                            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                                {{-- <li class="nav-item"> --}}
                                <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}"
                                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                    {{ $properties['native'] }}
                                </a>
                                {{-- </li> --}}
                            @endforeach
                        </div>
                    </li>
                    <li>
                        <label class="switch">
                            <input type="checkbox" onclick="changeMode()">
                            <span class="slider"></i></span>
                        </label>
                    </li>
                    {{-- End Switch the language --}}

                </ul>

                {{-- Start Display Search Surah --}}
                <div class="bars">
                    <i class="fas fa-bars"></i>
                </div>
                <form class="pos-rel">

                    <input id="input_search_surah" class="form-control mr-sm-2 my-1" type="search" aria-label="Search"
                        placeholder="{{ __('words.Enter Surah Name') }}">
                    <div class="search-result-box text-center">

                        <div id="list_surah" class="text-center">


                        </div>
                    </div>
                </form>

                {{-- End Search Surah --}}
                
            </div>

    </div>
    </nav>
</div>

