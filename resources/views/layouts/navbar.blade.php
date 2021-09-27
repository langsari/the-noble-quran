<style>
    .search-result-box {
        background: #fbfdfee6;
        position: absolute;
        width: 100%;
        color: black;
        box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;

    }

    .box-shadow{
        box-shadow: rgba(100, 100, 111, 0.2) 0px 5px 10px 0px;    }

    #navbarTogglerDemo02 > form{
        width: 40%;
    }

    @media screen and (max-width: 992px) {
        #navbarTogglerDemo02 > form{
        width: 100%;
    }

}
    #ss{
        text-decoration: none;
        color: #343a40;
    }

    .border-no-padding {
        /* border-bottom: solid #0000000f; */
    }

    .border-no-padding:hover{
        background: #f2f2f2;
        cursor: pointer
    }

    .pos-rel{
        position: relative;
        border-radius: 10px;
    }

/* Hover on ayat change color */
    .hover-change-color:hover{
        background: #f8fafc;
    }
    .surah-list .item:hover {
    background: #f0f3f8;
}
</style>



<div class="bg-dark ">


<nav class="navbar navbar-expand-lg navbar-dark bg-dark container " >
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
        aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('home') }}">Alquran <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        {{-- Start Display Search Surah --}}
        <form class="pos-rel">

            <input id="input_search_surah" class="form-control mr-sm-2 my-1" type="search" aria-label="Search"
                placeholder="Enter Surah Name">
            <div class="search-result-box text-center">

                <div  id="list_surah" class="text-center">


                </div>
            </div>
        </form>

        {{-- End Search Surah --}}
    </div>
</nav>
</div>
