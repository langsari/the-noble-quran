@extends('layouts.app')

@section('content')

    <div class="container my-5">


                <h3 class="text-center " id="surah_title"></h3>



        {{-- Start Sub Nav Bar --}}
        <div class="row d-flex justify-content-center  my-5 ">

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
                        aria-expanded="false" aria-controls="collapseExample">
                        Read Surah
                    </button>
                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#surah_tf_section"
                        aria-expanded="false" aria-controls="collapseExample">
                        TF Surah
                    </button>


                </p>
            </nav>
        </div>
        {{-- End Sub Nav Bar --}}


        {{-- Start Display Surah Read --}}
        <div class="row d-flex justify-content-center  my-1">

            <div class="collapse col-12 w-75" id="surah_read_section">

                <div class="card text-center">
                    <div class="card-body">

                        <h2 id="surah_read" style="line-height: 2.5em;">
                        </h2>

                    </div>
                </div>
            </div>
        </div>

        {{-- End Display Surah Read --}}

        {{-- Start Display Surah Info --}}
        <div class="row d-flex justify-content-center  my-2">

            <div class="collapse col-12 w-75" id="surah_info_section">


                <div class="card text-center ">
                    <div class="card-body ">
                        <h5 id="surah_name" class="card-title"></h5>
                        {{-- <p class="card-text">
                                        Some quick example text to build on the card title and make up the bulk of the card's content.
                                    </p> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li id="surah_number" class="list-group-item"></li>
                        <li class="list-group-item" id="numberOfVerses"></li>
                        <li class="list-group-item" id="revelation"></li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
            </div>
        </div>

        {{-- </div>
        </div> --}}
        {{-- End Display Surah Info --}}


        {{-- Start Display Ayat section --}}
        <div class="row d-flex justify-content-center  my-2 ">
            <div class="collapse col-12 w-75" id="surah_tf_section">

                <ul class="ayat" style="padding-left: 0px; list-style:none:">
                </ul>

            </div>

        </div>
        {{-- End Display Ayat section --}}


    </div>
@endsection
