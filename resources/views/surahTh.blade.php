@extends('layouts.l')

@section('content')

    <div class="container my-5">






        {{-- Start Display Ayat section --}}
        <div class="row d-flex justify-content-center  my-2 ">
            <div class=" col-12 w-75" id="surah_tf_section">
                <!-- Start Small button groups (default and split) -->
                <div class="sticky-top btn-group ">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        Ayat
                    </button>
                    <div id="select" class="dropdown-menu">
                    </div>
                </div>
                <!-- End Small button groups (default and split) -->

                <ul class="ayat" style="padding-left: 0px; list-style:none:">

                    @forelse ($ayats as $ayat)


                        <div class=" card text-center" id="{{ $ayat->id }}">
                            <div class="card-body">

                                <li class='text-center' style="list-style-type: none;">
                                    <h5>
                                        <span class="badge badge-pill badge-secondary"> {{ $ayat->id }}</span>
                                    </h5>

                                    <div class="ayatt{{ $ayat->id }}">

                                    </div>


                                    <h5>{{ $ayat->verse }}</h5>






                                </li>

                                <br>

                            </div>
                        </div>
                        <br>
                    @empty
                        Not yet
                    @endforelse

                </ul>

            </div>

        </div>
        {{-- End Display Ayat section --}}


    </div>
@endsection

@section('script')

    <script>
        // -----------------START----------------
        // {{-- Javascript For Fetch All Surah Audio From External API And Show In Surah Page --}}


        let url = window.location.href;
        let newUrl = url.split('/');
        let id = newUrl[newUrl.length - 1]

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

        console.log(id)

        function getSurah() {
            fetch(`https://api.quran.sutanlab.id/surah/${id}`)
                .then(res => res.json())
                .then(data => {

                        let verses = data.data.verses;
                        // console.log(data)
                        // surah_title.innerHTML = "<h2>" + data.data.name.translation.en + " - " + data.data.name.long +
                        //     "</h2>";
                        // surah_name.innerHTML = "<h2>" + data.data.name.translation.en + " - " + data.data.name.long +
                        //     "</h2>";
                        // surah_number.innerHTML = "<h5>Surah Number :<span> " + data.data.number + "</span></h5>";
                        // numberOfVerses.innerHTML = "<h5>Number Of Verses :<span> " + data.data.numberOfVerses +
                        //     "</span></h5>";
                        // revelation.innerHTML = "<h5>Revelation Place :<span> " + data.data.revelation.en + " - " + data.data
                        //     .revelation.arab + "</span></h5>";


                        let ayats = "";
                        for (let index = 0; index < verses.length; index++) {
                            let gg = `.ayatt${index +1}`;
                            let ayatList = document.querySelector(gg);
                            console.log(ayatList)

                            ayats =
                                `

                                    <h3 class="pt-4" style="line-height: 2em;">
                                        ${verses[index].text.arab}
                                    </h3>
                                    <div>
                                        <audio id="player${index}"  class='text-center'>
                                        <source src="${verses[index].audio.primary}" type="audio/ogg">
                                        Your browser does not support the audio element.
                                        </audio>
                                        <br>
                                        <div class='text-center '>
                                            <button class="rounded-lg btn btn-success" onclick="document.getElementById('player${index}').play()">Play</button>
                                            <button class="rounded-lg btn btn-danger" onclick="document.getElementById('player${index}').pause()">Pause</button>
                                            <button class="rounded-lg btn btn-dark" onclick="document.getElementById('player${index}').volume+=0.1">+</button>
                                            <button class="rounded-lg btn btn-dark" onclick="document.getElementById('player${index}').volume-=0.1">-</button>
                                        </div>
                                        <br>
                                        <br>
                                    </div>
                                    <h6 class="mb-3 text-black-50">Transliteration</h6>
                                    <h5 class="text-dark " style="line-height: 2em;">${verses[index].text.transliteration.en}</h5>
                                    <br>
                                    <h6 class="mb-3 text-black-50">Translation</h6>


                                `;


                            ayatList.innerHTML = ayats;

                        }
                    }
                    )
                }

                getSurah()
    </script>

@endsection
