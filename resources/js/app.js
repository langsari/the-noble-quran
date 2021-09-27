require('./bootstrap');


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
                            <li id=${suarh.number} data-surah=${suarh.number} data-title=${suarh.name.transliteration.en}>
                                <a href='/surah/${suarh.number}'>
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



// -----------------START----------------
// {{-- Javascript For Fetch All Surah Audio From External API And Show In Surah Page --}}


let url = window.location.href;
let newUrl = url.split('/');
let id = newUrl[newUrl.length - 1]
let ayatList = document.querySelector('.ayat');
const surah_title= document.getElementById('surah_title')
const surah_name= document.getElementById('surah_name')
const surah_number= document.getElementById('surah_number')
const numberOfVerses= document.getElementById('numberOfVerses')
const revelation= document.getElementById('revelation')
const surah_read= document.getElementById('surah_read')
const select= document.getElementById('select')
const selecAll= document.getElementById('selecAll')
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
                surah_title.innerHTML="<h2>" + data.data.name.translation.en+ " - " +data.data.name.long +"</h2>" ;
                surah_name.innerHTML="<h2>" + data.data.name.translation.en+ " - " +data.data.name.long +"</h2>" ;
                surah_number.innerHTML = "<h5>Surah Number :<span> " + data.data.number + "</span></h5>";
                numberOfVerses.innerHTML = "<h5>Number Of Verses :<span> " + data.data.numberOfVerses  + "</span></h5>";
                revelation.innerHTML = "<h5>Revelation Place :<span> " + data.data.revelation.en + " - " + data.data.revelation.arab  + "</span></h5>";
                let i =1;
                let j =500;


                let ayats = "";
                for (let index = 0; index < verses.length; index++) {

                    all_sura +=
                    `
                    <hr id="${j}">

                    <div >
                    <span class=" badge badge-pill badge-success" style="font-size: 1rem;" > ${new Intl.NumberFormat('ar-EG').format(i)}</span>
                    </span>
                    <br>
                    <span class="text-right">
                    ${verses[index].text.arab}
                    </div>






                    `;

                    selec+=`<a class="btn  dropdown-item" href="#${i-1}"><h4>${i}</h4></a>`
                    seleca +=`<a class="btn  dropdown-item" href="#${j}"><h4>${i}</h4></a>`



                    ayats +=
                        `

                        <div class=" card text-center" id="${i-1}" >
                            <div class="card-body">

                                <li class='text-center' style="list-style-type: none;">
                                    <h5  >
                                        <span class="badge badge-pill badge-secondary"> ${new Intl.NumberFormat('ar-EG').format(i)}</span>
                                        </h5>
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

                surah_read.innerHTML=all_sura
                select.innerHTML=selec
                selecAll.innerHTML=seleca



            }
        )
}

getSurah()

// -----------------END----------------
