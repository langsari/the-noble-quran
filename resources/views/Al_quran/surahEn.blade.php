@extends('layouts.master')

@section('content')

    <style>


        body{
            direction: ltr;
        }
        .custom-play-audio-position {
            top: 10px;


        }

        @media (max-width: 992px) {
            .sticky-top {
                position: sticky;
                top: 60pxpx !important;
                z-index: 1020;
            }
        }

        .rounded-lg {
                border-radius: 1.3rem !important;
            }

        .sticky-top {
            position: sticky;
            top: 69px !important;
            z-index: 1020;
        }

        .movetoSpe{

            overflow: scroll;
            min-height: fit-content;
            max-height: 453px;

        }

    </style>

    <div class="container">
        <div class="container my-5">

            <h3 class="text-center " id="surah_title"></h3>

            <div class="row d-flex justify-content-center  my-5 ">

            </div>

        </div>


        {{-- Start Bookmarke --}}
        <h5>Your bookmarke in this surah</h5>
        <ul id="bookmark">

        </ul>
        <hr>
        {{-- End Bookmarke --}}

        {{-- #####################  Start Nav Tablist Plii ##################### --}}
        <div class="container">

            <ul style="font-size: medium;" class="box-shadow justify-content-center  nav nav-pills mb-5 py-3 " id="pills-tab" role="tablist">

                <li class="nav-item" role="presentation">
                    <a class="nav-link active " id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
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

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-Video-tab" data-toggle="pill" href="#pills-Video" role="tab"
                        aria-controls="pills-Video" aria-selected="false">{{ __('words.Video') }}</a>
                </li>

            </ul>


            {{-- ##################### Start pills-tabContent ##################### --}}
            <div class="tab-content" id="pills-tabContent">

                {{-- ##################### Start translate surah ##################### --}}
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                    {{-- Start Display Ayat section --}}
                    <div class="row d-flex justify-content-center  my-2 ">
                        <div class=" col-12 w-75" id="surah_tf_section">
                            <!-- Start Small button groups (default and split) -->
                            <div class="sticky-top btn-group ">
                                <button class=" btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ayat
                                </button>
                                <div id="select" class="move-to-spec movetoSpe dropdown-menu box-shadow">
                                </div>
                            </div>
                            <!-- End Small button groups (default and split) -->

                            <ul class="ayat" style="padding-left: 0px; list-style:none:">
                            </ul>

                        </div>

                    </div>
                    {{-- End Display Ayat section --}}

                </div>
                {{-- ##################### End translate surah ##################### --}}

                {{-- #####################  Startsurahinfo   ##################### --}}
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">


                    {{-- ##################### Start Display Surah Info ##################### --}}
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


                    {{-- #####################  End Display Surah Info  ##################### --}}



                </div>
                {{-- ##################### End Startsurah info ##################### --}}

                {{-- #####################  Start Read Surah  ##################### --}}
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">


                    {{-- #####################  Start Display Surah Read  ##################### --}}
                    <div class="row d-flex justify-content-center  my-1">

                        <div class=" col-12 w-75" id="surah_read_section">

                            <!-- Start Small button groups (default and split) -->
                            <div class="sticky-top btn-group">
                                <button class=" btn btn-secondary btn-sm dropdown-toggle" type="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ayat
                                </button>
                                <div id="selecAll" class="move-to-spec movetoSpe dropdown-menu box-shadow">
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

                    {{-- ##################### End Display Surah Read ##################### --}}



                </div>
                {{-- ##################### End Read Surah ##################### --}}

                {{-- ##################### Start Video Surah ##################### --}}
                <div class="tab-pane fade" id="pills-Video" role="tabpanel" aria-labelledby="pills-Video-tab">



                    {{-- ##################### Start Display Video ##################### --}}
                    <div class="container">

                        @if ($tfasir != 'no')


                            <div class="card-body text-center">
                                <iframe class="vid" width="780" height="439" src="{{ $tfasir->url }}"
                                    title="YouTube video player" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h4 class="my-3 p-3 alert alert-info">{{ $tfasir->description }}</h4>
                            @else
                                <h2 class="text-center alert alert-danger">{{ __('words.No Video Added Yet') }}</h2>

                        @endif




                    </div>

                </div>
                {{-- ##################### End Display Video ##################### --}}


            </div>
            {{-- ##################### End pills-tabContent ##################### --}}


            {{-- ##################### End Nav Tablist Plii ##################### --}}







            {{-- ##################### Start Popup Add note Section ##################### --}}

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title" id="exampleModalLabel">{{ __('words.My Notes') }}</h1>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="">
                                <div class="form-group">
                                    <label for="note-title" class="col-form-label">{{ __('words.Note title') }}:</label>
                                    <input type="text" class="form-control" id="note-title" placeholder="Note title">
                                </div>
                                <div class="form-group">
                                    <label for="note-text" class="col-form-label">Note details:</label>
                                    <textarea class="form-control" id="note-text" placeholder="Note details"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" id="add-btn">Add Note</button>
                        </div>

                    </div>
                    <!-- View all note -->
                    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h2 class="modal-title" id="exampleModalLabel">Your Notes</h2>
                            </div>
                            <div class="modal-body">
                                <hr>
                                <div id="notes" class="notes">

                                    <!-- Display all Your note Here -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

            {{-- ##################### End Popup Add note Section ##################### --}}



        </div>

    @endsection













    @section('script')

        <script src="{{ asset('js/alquran/surah/allLang.js') }}"></script>
        <script src="{{ asset('js/alquran/surah/surahEn.js') }}"></script>

    @endsection --}}
