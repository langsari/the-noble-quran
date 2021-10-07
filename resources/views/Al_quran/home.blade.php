
@extends('layouts.app')


{{-- Contetn To Show All Sutah Name --}}
@section('content')
<br>
    <div class="container py-2">

        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <h1 class="content-title ">Surah</h1>
                <div class="content-body">

                    <ul class="surah-list">
                        {{-- Here Will Display All Surahs Name --}}
                    </ul>

                </div>
            </div>
        </div>

    </div>


@endsection


@section('script')

    <script>
        // -----------------START----------------
        // {{-- Javascript For Fetch All Surah Name From External API And Show In Home Page --}}

        let surahList = document.querySelector('.surah-list');

        function getAllSurah() {
            fetch("https://api.quran.sutanlab.id/surah")
                .then(res => res.json())
                .then(data => {
                        let dataPrint = '';
                        let suarhs = data.data;
                        // console.log(data.data)

                        suarhs.forEach(suarh => {
                            // console.log(suarh.name.long)
                            dataPrint += `
                            <li class="hover-change-color-alq" id=${suarh.number} data-surah=${suarh.number} data-title=${suarh.name.transliteration.en}>
                                <a href='alquran/surah/${suarh.number}'>
                                    <div class='item'>
                                        <div class='item-id'><span>${suarh.number}</span></div>
                                        <div class='item-right'>
                                            <div class='arabic'>${suarh.name.long}</div>
                                            <div class='verses'>${suarh.numberOfVerses} Verses</div>
                                        </div>
                                        <div class='item-left'>
                                            <div class='title'>${suarh.name.transliteration.en}</div>
                                            <div class='translate'>${suarh.name.translation.en}</div>
                                        </div>
                                        <div class='clear'></div>
                                    </div>
                                </a>
                            </li>
                        `
                        });


                        surahList.innerHTML = dataPrint


                    }

                )
        }

        getAllSurah()


        // -----------------END----------------
    </script>

@endsection
