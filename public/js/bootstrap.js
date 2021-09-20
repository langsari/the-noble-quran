window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo';

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: process.env.MIX_PUSHER_APP_KEY,
//     cluster: process.env.MIX_PUSHER_APP_CLUSTER,
//     forceTLS: true
// });

///Surah Api
let SurahsContainer = document.querySelector('.surahasContainer')
getSurahs()
function getSurahs()
{
    ///fetch surahs meta data {Name of Surahs}
    fetch("http://api.alquran.cloud/v1/meta")
    .then(response => response.json())
    .then(data=>{
        let surahs = data.data.surahs.references;
        let numberOfSurahs = 114;
        SurahsContainer.innerHTML = "";
        for (let i = 0; i < numberOfSurahs; i++) {
            SurahNum= i+1;
            SurahsContainer.innerHTML += 
            `   
                <div class="surah">
                <div class="SurahNum"><span>${SurahNum}</span></div>
                <p>${surahs[i].name}</p>
                <p>${surahs[i].englishName}</p>
                </div>
            `
                
        }
        let SurahsTitels = document.querySelectorAll('.surah');
        let popup = document.querySelector('.surah-popup'), 
            AyatContainer = document.querySelector('.ayat');
            SurahsTitels.forEach((title,index)=>{
                title.addEventListener('click',()=>{
                    fetch(`http://api.alquran.cloud/v1/surah/${index + 1}`)
                    .then(response => response.json())
                    .then(data=>{
                        AyatContainer.innerHTML = "";
                        let Ayat = data.data.ayahs;
                        
                        Ayat.forEach(aya=>{
                            popup.classList.add('active');
                            AyatContainer.innerHTML +=
                            `<p>(${aya.numberInSurah}) - ${aya.text}</p> `
                        })
                    })
                })
            })
            let closePopup = document.querySelector('.close-popup');
            closePopup.addEventListener('click',()=>{
                popup.classList.remove('active');
            })
    })
}