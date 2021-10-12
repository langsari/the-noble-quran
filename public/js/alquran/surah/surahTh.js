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
            let idaftersplit = id.split('#')


            function getSurah() {
                fetch(`https://api.quran.sutanlab.id/surah/${id}`)
                    .then(res => res.json())
                    .then(data => {

                        let verses = data.data.verses;

                        let ayats = "";
                        for (let index = 0; index < verses.length; index++) {
                            let gg = `.ayatt${index +1}`;
                            let ayatList = document.querySelector(gg);
                            console.log(ayatList)


                            //  Start Get all vesres of surah for read only
                            all_sura +=
                                `
                    <hr id="all${index+1}">
                    <div class="hover-change-color" >
                        <span class=" badge badge-pill badge-success" style="font-size: 1rem;" > ${new Intl.NumberFormat('ar-EG').format(index+1)}</span>
                        </span>
                        <br>
                        <span class="text-right">
                        ${verses[index].text.arab}
                    </div>
                    `;
                            //  Start Get all vesres of surah for read only


                            //  Start Get all vesres With transilation
                            ayats =
                                `

                                <h3 class="pt-4" style="line-height: 2em;">
                                    ${verses[index].text.arab}
                                </h3>
                                <div  class='custom-play-audio-position'>
                                    <audio id="player${index}"  class='text-center'>
                                    <source src="${verses[index].audio.primary}" type="audio/ogg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <br>
                                    <div class='text-center '>
                                        <button title="Playe" class="rounded-lg btn btn btn-success btn-sm btn-lg" onclick="document.getElementById('player${index}').play()"><i class="fas fa-play  fa-sm"></i></button>
                                        <button title="Pause" class="rounded-lg btn btn-danger btn-sm" onclick="document.getElementById('player${index}').pause()"><i class="fas fa-pause fa-1x"></i></button>

                                            <button title="Add Note" type="button" class="rounded-lg btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-edit fa-sm"></i></button>
                                            <button title="Make Bookmark" style="background-color: #83ccf7;" type="button" class="rounded-lg btn  btn-sm bookmark" data-bookmark="${idaftersplit[0]}:${index+1}" ><i class="far fa-bookmark fa-1x"></i></button>


                                    </div>
                                    <br>
                                    <br>
                                </div>
                                <h6 class="mb-3 text-black-50">การทับศัพท์</h6>
                                <h5 class="text-dark " style="line-height: 2em;">${verses[index].text.transliteration.en}</h5>
                                <br>
                                <h6 class="mb-3 text-black-50">การแปล</h6>


                            `;
                            //  End Get all vesres of surah With transilation


                            ayatList.innerHTML = ayats;
                            surah_read.innerHTML = all_sura

                        }
                    })
            }

            getSurah()
            ///-------- End Fetch surah -------------///





