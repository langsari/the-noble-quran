          // Javascript For Fetch All Surah Audio From External API And Show In Surah Page




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
        let selec = "";
        let seleca = "";
        let idaftersplit = id.split('#')


          function getSurah() {
              fetch(`https://api.quran.sutanlab.id/surah/${id}`)
                  .then(res => res.json())
                  .then(data => {

                      let verses = data.data.verses;
                      console.log(data)

                      //surah info
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

                          //  Start Git all vesres of surah for read only
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
                          //  Start Git all vesres of surah for read only


                          //  Start Move to specific Ayat in read with translation
                          selec += `<a class="btn  dropdown-item" href="#${i}"><h4>${i}</h4></a>`
                          //  End Move to specific Ayat in read with translation


                          //  Start Move to specific Ayat in read with translation
                          seleca += `<a class="btn  dropdown-item" href="#${j}"><h4>${i}</h4></a>`
                          //  End Move to specific Ayat in only


                          //  Start Get all vesres With transilation

                          ayats +=
                              `

                            <div class="hover-change-color container box-shadow my-3 card text-center" id="${i}" >
                                <div class=" card-body ">
                                    <div   class='custom-play-audio-position'>
                                            <audio id="player${index}"  class='text-center'>
                                            <source src="${verses[index].audio.primary}" type="audio/ogg">
                                            Your browser does not support the audio element.
                                            </audio>
                                            </div>

                                            <div  style="position: absolute;" class='text-center '>
                                                <button  title="Playe" class="rounded-lg btn btn btn-success btn-sm btn-lg" onclick="document.getElementById('player${index}').play()"><i class="fas fa-play  fa-1x"></i></button>
                                                <button  title="Pause" class="rounded-lg btn btn-danger btn-sm" onclick="document.getElementById('player${index}').pause()"><i class="fas fa-pause fa-1x"></i></button>

                                                <button  title="Add Note" type="button" class="rounded-lg btn btn-dark btn-sm" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-edit fa-1x"></i></button>
                                                <button  title="Make Bookmark" style="background-color: #83ccf7;" type="button" class="rounded-lg btn  btn-sm bookmark" data-bookmark="${idaftersplit[0]}:${index+1}" ><i class="far fa-bookmark fa-1x"></i></button>



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
                          //  End Get all vesres of surah With transilation

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

          /// #####################  END  ##################### ///


