//Explore button
let exploreBtn = document.querySelector('.title .btn'),
    HadithSection = document.querySelector('.hadith');
    exploreBtn.addEventListener('click',()=>{
    HadithSection.scrollIntoView({
        behavior : "smooth"
    })
})


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
    links = document.querySelectorAll('ul li');
links.forEach(link => {
    link.addEventListener('click',()=>{
        document.querySelector(' ul li.active').classList.remove('active');
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


// ############################## Start Script searh surah ##############################
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

        gg += `<a id="ss" href="/surah/${sss.number}">
                    <div class=" card-body border-no-padding p-2 my-1">
                        <h6>
                            ${sss.name.translation.en} - ${sss.name.short}
                        </h6>
                    </div>
                    </a>
        `
    });

    list_surah.innerHTML = gg;

};

input_search_surah.addEventListener('input', () => searchSurah(input_search_surah.value));
// ##############################  End Script searh surah ##############################