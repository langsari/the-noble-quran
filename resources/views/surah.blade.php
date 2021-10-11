


@extends('main')

@section('title', 'The-Nobal-Quran | Surah')

@section('content')

@include('layouts.navbar')


    <div class="container my-5">

        <h3 class="text-center " id="surah_title"></h3>

        <div class="row d-flex justify-content-center  my-5 ">

        </div>

    </div>





    {{-- Start Nav Tablist Plii --}}
    <div class="container">

        <ul class="justify-content-center  nav nav-pills mb-3 py-4" id="pills-tab" role="tablist">

            <li class="nav-item" role="presentation">
                <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ayat</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">surah info</a>
            </li>

            <li class="nav-item" role="presentation">
                <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab"
                    aria-controls="pills-contact" aria-selected="false">Read</a>
            </li>

        </ul>
        {{-- Start pills-tabContent --}}
        <div class="tab-content" id="pills-tabContent">

            {{-- Start translate surah --}}
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                {{-- Start Display Ayat section --}}
                <div class="row d-flex justify-content-center  my-2 ">
                    <div class=" col-12 w-75" id="surah_tf_section">
                        <!-- Start Small button groups (default and split) -->
                        <div class="sticky-top btn-group ">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Ayat
                            </button>
                            <div id="select" class="dropdown-menu box-shadow">
                            </div>
                        </div>
                        <!-- End Small button groups (default and split) -->

                        <ul class="ayat" style="padding-left: 0px; list-style:none:">
                        </ul>

                    </div>

                </div>
                {{-- End Display Ayat section --}}






            </div>
            {{-- End translate surah --}}

            {{-- Startsurah info --}}
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                {{-- Start Display Surah Info --}}
                <div class="row d-flex justify-content-center  my-2">

                    <div class=" col-12 w-75" id="surah_info_section">


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


                {{-- End Display Surah Info --}}



            </div>
            {{-- End Startsurah info --}}

            {{-- Start Read Surah --}}
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">



                {{-- Start Display Surah Read --}}
                <div class="row d-flex justify-content-center  my-1">

                    <div class=" col-12 w-75" id="surah_read_section">

                        <!-- Start Small button groups (default and split) -->
                        <div class="sticky-top btn-group">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Ayat
                            </button>
                            <div id="selecAll" class="dropdown-menu box-shadow">
                            </div>
                        </div>
                        <!-- End Small button groups (default and split) -->
                        <div class="card text-center">

                            <div class="card-body">

                                <h2 id="surah_read" style="line-height: 2.5em;">
                                </h2>

                            </div>
                        </div>
                    </div>
                </div>

                {{-- End Display Surah Read --}}



            </div>
            {{-- End Read Surah --}}

        </div>
        {{-- End pills-tabContent --}}


        {{-- End Nav Tablist Plii --}}
















    @endsection


    
