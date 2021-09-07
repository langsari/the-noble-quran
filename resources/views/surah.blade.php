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

                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#search_surah"
                        aria-expanded="false" aria-controls="collapseExample">
                        Search Surah
                    </button>


                </p>
            </nav>
        </div>
        {{-- End Sub Nav Bar --}}

<!-- Small button groups (default and split) -->
<div class="btn-group">
    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Small button
    </button>
    <div id="select" class="dropdown-menu">

    </div>
  </div>




        {{-- Start Display Search Surah --}}
        <div class="row d-flex justify-content-center  my-1">
            <div class="collapse col-12 w-75" id="search_surah">
                <div class="card text-center">
                    <div class="card-body">
                        <input id="input_search_surah" class="form-control mr-sm-2 my-1" type="text"
                            placeholder="Enter Surah Name">
                        <div class="my-4" id="list_surah">
                            <div class="my-3">
                                <h4>
                                </h4>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Search Surah --}}

        <script>
            const input_search_surah = document.querySelector('#input_search_surah');
            const list_surah = document.querySelector('#list_surah');

            //search from suarah api and filter it by surah name
            const searchSurah = async searchtext => {
                if (searchtext == "") {
                    return list_surah.innerHTML = "";
                }
                const res = await fetch("https://api.quran.sutanlab.id/surah");
                const data = await res.json();
                const t = data.data

                const tt = t.map((item) => {
                    return item
                })
                // console.log(tt);
                let gg = '';
                //     //get match to current input
                let matches = tt.filter((surah) => {

                    const regex = new RegExp(`^${searchtext}`, 'gi');
                    return surah.name.short
                        .match(regex) || surah.name.translation.en.match(regex)





                })

                console.log(matches);

                matches.forEach(sss => {

                    gg += `
                                <div class="my-3">
                                    <h4>
                                        <a href="/surah/${sss.number}">${sss.name.translation.en} - ${sss.name.short}</a>
                                    </h4>
                                </div>
                                <hr>
                    `
                });

                list_surah.innerHTML = gg;

            };

            input_search_surah.addEventListener('input', () => searchSurah(input_search_surah.value));
        </script>




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
