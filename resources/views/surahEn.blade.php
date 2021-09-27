@extends('layouts.app')

@section('content')

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


    @section('script')

        <script>
            // -----------------START----------------
            // Javascript For Fetch All Surah Audio From External API And Show In Surah Page


            let url = window.location.href;
            let newUrl = url.split('/');
            let id = newUrl[newUrl.length - 1]
            let ayatList = document.querySelector('.ayat');
            const surah_title = document.getElementById('surah_title')
            const surah_name = document.getElementById('surah_name')
            const surah_number = document.getElementById('surah_number')
            const numberOfVerses = document.getElementById('numberOfVerses')
            const revelation = document.getElementById('revelation')
            const surah_read = document.getElementById('surah_read')
            const select = document.getElementById('select')
            const selecAll = document.getElementById('selecAll')
            let all_sura = "";
            const thai = [];
            let selec = "";
            let seleca = "";


            function getSurah() {
                fetch(`https://api.quran.sutanlab.id/surah/${id}`)
                    .then(res => res.json())
                    .then(data => {

                        let verses = data.data.verses;
                        console.log(data)
                        surah_title.innerHTML = "<h2>" + data.data.name.translation.en + " - " + data.data.name.long +
                            "</h2>";
                        surah_name.innerHTML = "<h2>" + data.data.name.translation.en + " - " + data.data.name.long +
                            "</h2>";
                        surah_number.innerHTML = "<h5>Surah Number :<span> " + data.data.number + "</span></h5>";
                        numberOfVerses.innerHTML = "<h5>Number Of Verses :<span> " + data.data.numberOfVerses +
                            "</span></h5>";
                        revelation.innerHTML = "<h5>Revelation Place :<span> " + data.data.revelation.en + " - " + data.data
                            .revelation.arab + "</span></h5>";
                        let i = 1;
                        let j = 500;


                        let ayats = "";
                        for (let index = 0; index < verses.length; index++) {

                            all_sura +=
                                `
                        <hr id="${j}">

                        <div class="hover-change-color" >
                        <span class=" badge badge-pill badge-success" style="font-size: 1rem;" > ${new Intl.NumberFormat('ar-EG').format(i)}</span>
                        </span>
                        <br>
                        <span class="text-right">
                        ${verses[index].text.arab}
                        </div>






                        `;

                            selec += `<a class="btn  dropdown-item" href="#${i-1}"><h4>${i}</h4></a>`
                            seleca += `<a class="btn  dropdown-item" href="#${j}"><h4>${i}</h4></a>`



                            ayats +=
                                `

                            <div class="container box-shadow my-3 card text-center" id="${i-1}" >
                                <div class=" card-body hover-change-color">
                                    <div class='custom-play-audio-position'>
                                            <audio id="player${index}"  class='text-center'>
                                            <source src="${verses[index].audio.primary}" type="audio/ogg">
                                            Your browser does not support the audio element.
                                            </audio>

                                            <div class='text-center '>
                                                <button class="rounded-lg btn btn-success" onclick="document.getElementById('player${index}').play()"><i class="fas fa-play  fa-sm"></i></button>
                                                <button class="rounded-lg btn btn-danger" onclick="document.getElementById('player${index}').pause()"><i class="fas fa-pause fa-1x"></i></button>

                                            </div>

                                        </div>
                                    <li class='text-center ' style="list-style-type: none;">
                                        <h5  >
                                            <span class="badge badge-pill badge-secondary"> ${new Intl.NumberFormat('ar-EG').format(i)}</span>
                                            </h5>
                                        <h3 class="pt-4" style="line-height: 2em;">
                                            ${verses[index].text.arab}
                                        </h3>

                                        <h6 class="mb-3 text-black-50">Transliteration</h6>
                                        <h5 class="text-dark " style="line-height: 2em;">${verses[index].text.transliteration.en}</h5>
                                        <br>
                                        <h6 class="mb-3 text-black-50">Translation</h6>
                                        <h5 class="text-dark "style="line-height: 2em;">
                                            ${verses[index].translation.en}

                                    </li>

                                    <br>

                                </div>
                            </div>
                `;

                            i++;
                            j++;


                        }
                        ayatList.innerHTML = ayats;

                        surah_read.innerHTML = all_sura
                        select.innerHTML = selec
                        selecAll.innerHTML = seleca



                    })
            }

            getSurah()

            // -----------------END----------------
        </script>
    @endsection
