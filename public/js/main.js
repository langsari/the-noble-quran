// //Explore button
// // //
// // let exploreBtn = document.querySelector('.title .btn'),
// //     HadithSection = document.querySelector('.hadith');
// //     exploreBtn.addEventListener('click',()=>{
// //     HadithSection.scrollIntoView({
// //         behavior : "smooth"
// //     })
// // })
// //


let fixedNav = document.querySelector('.header');
window.addEventListener("scroll",()=>{
    window.scrollY > 100 ? fixedNav.classList.add('active') : fixedNav.classList.remove('active');
})
//Hadith Chapter
let hadithContainer = document.querySelector('.hadithContainer'),
    next = document.querySelector('.buttons .next'),
    prev = document.querySelector('.buttons .prev'),
    number = document.querySelector('.buttons .number');
    let hadithIndex = 0;
HadithChanger();
function HadithChanger()
{
    fetch("https://api.hadith.sutanlab.id/books/muslim?range=1-300")
    .then(response => response.json())
    .then(data =>{

        let Hadiths = data.data.hadiths;
        changeHadith();
        next.addEventListener('click',()=>{
            hadithIndex == 299 ? hadithIndex = 0 : hadithIndex++;
            changeHadith()
        })
        prev.addEventListener('click',()=>{
            hadithIndex == 0 ? hadithIndex = 299 : hadithIndex--;
            changeHadith()
        })
        function changeHadith()
        {
           hadithContainer.innerText = Hadiths[hadithIndex].arab;
           number.innerText = `300 - ${hadithIndex + 1}`
        }
    })
}

// Link Sections
let sections = document.querySelectorAll("section");
    links = document.querySelectorAll('.header ul li');
links.forEach(link => {
    link.addEventListener('click',()=>{
        document.querySelector('.header ul li.active').classList.remove('active');
        link.classList.add('active');
        let target = link.dataset.filter;
        sections.forEach(section=>{
            if(section.classList.contains(target))
            {
                section.scrollIntoView({
                    behavior : "smooth"
                })
            }
        })
    })  
})


//PrayTime Api
let cards = document.querySelector('.cards');
getPrayTimes();
function getPrayTimes()
{
    fetch("http://api.aladhan.com/v1/timingsByCity?city=Thailand&country=bangkok&method=8")
    .then(response => response.json())
    .then(data =>{
        let times = data.data.timings;
        cards.innerHTML = "";
        for (let time in times)
        {
            cards.innerHTML+=
            `
            <div class="card">
                <div class="circle">
                    <svg>
                        <Circle cx="100" cy="100" r="100"></Circle>
                    </svg>
                    <div class="praytime">${times[time]}</div>
                  </div>
                  <p>${time}</p>
                </div>
            `
        }
    })
  
}


//Surah AYAT


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