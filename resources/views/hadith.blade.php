@extends('quran.nav2')
@section('content')

    <style>
        @font-face {
            font-family: 'Uthmani';
            src: url('assets/font/UthmanicHafs1Ver09.otf')format('truetype');
        }

        .arabic {
            font-family: 'Uthmani', serif;
            font-size: 23px;
            font-weight: normal;
            direction: rtl;
            padding: 0 5px;
            margin: 0;
        }

        .latin {
            font-family: serif;
            font-size: 17px;
            font-weight: normal;
            direction: ltr;
            padding: 0;
            margin: 0;
        }

        .arabic_number {
            font-size: 28px;
            font-weight: normal;
        }

        .cautions {

            font-size: 13px;
            font-weight: normal;
            direction: ltr;
            padding: 0 5px;
            margin: 0;
            color: red;

        }

        html {
            background-color: #9be2cd;
        }

        .hadithContainer ol{
          list-style: none;
        }
    </style>


    <div style="background-color:#9be2cd;width:100%;" class="mt-5  container text-center">
        <div class=" justify-content-center row">
          <h1 class="m-3">Hadiths</h1>
            <div class="col-10">

                <div class="hadithContainer">
                    <ol class="hadith-list">

                    </ol>
                </div>

            </div>
        </div>

    </div>


    </div>


    <script>
        let hadithList = document.querySelector('.hadith-list');

        function getAllHadith() {
            fetch("https://ahadith-api.herokuapp.com/api/ahadith/all/ar-tashkeel")
                .then(response => response.json())
                .then(data => {
                  console.log(data);
                    let Hadiths = data.AllChapters;
                    let HadithEn;
                    let dataPrint;

                    fetch("https://ahadith-api.herokuapp.com/api/ahadith/all/en")
                        .then(response => response.json())
                        .then(dataEn => {

                            HadithEn = dataEn.AllChapters

                            for (i = 0; i < 20; i++) {
                                dataPrint += `
                                <div class="card m-4">
                                  <li>
                                    <div class="card-header">
                                        ${Hadiths[i].Hadith_ID}
                                    </div>
                                    <div class="card-body">
                                        <blockquote class="blockquote mb-0">
                                            <p class="arabic">${Hadiths[i].Ar_Text}</p>
                                            <footer class="mt-5 blockquote-footer">
                                              ${HadithEn[i].En_Text}
                                            </footer>
                                        </blockquote>
                                    </div>
                                  </li>
                                </div>`

                            }

                            hadithList.innerHTML = dataPrint

                        })
                })


        }
        getAllHadith()
    </script>
