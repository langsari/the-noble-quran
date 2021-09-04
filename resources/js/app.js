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


function getSurah() {
    fetch(`https://api.quran.sutanlab.id/surah/${id}`)
        .then(res => res.json())
        .then(data => {

                let verses = data.data.verses;
                console.log(verses)
                console.log(data.data)
                const thai = [];
                // console.log(verses[1].text.arab)

                let ayats = "";

                for (let index = 0; index < verses.length; index++) {
                    ayats +=
                        `

            <li class='text-center '><h5>  ${verses[index].text.arab} - ${verses[index].number.inSurah}</h5></li>
            <audio controls class='text-center'>
                <source src="${verses[index].audio.primary}" type="audio/ogg">

                Your browser does not support the audio element.
            </audio>

            <br>
            <br>
            <br>
            `
                    ayatList.innerHTML = ayats;
                }
            }
        )
}

getSurah()

// -----------------END----------------
