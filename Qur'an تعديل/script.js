// ///Surah Api
// let SurahsContainer = document.querySelector('.surahasContainer')
// getSurahs()
// function getSurahs()
// {
//     ///fetch surahs meta data {Name of Surahs}
//     fetch("http://api.alquran.cloud/v1/meta")
//     .then(response => response.json())
//     .then(data=>{
//         let surahs = data.data.surahs.references;
//         let numberOfSurahs = 114;
//         SurahsContainer.innerHTML = "";
//         for (let i = 0; i < numberOfSurahs; i++) {
            
//             SurahsContainer.innerHTML += 
//             `
//                 <div class="surah">
//                 <p>${surahs[i].name}</p>
//                 <p>${surahs[i].englishName}</p>
//                 </div>
//             `
                
//         }
//         let SurahsTitels = document.querySelectorAll('.surah');
//         let popup = document.querySelector('.surah-popup'), 
//             AyatContainer = document.querySelector('.ayat');
//             SurahsTitels.forEach((title,index)=>{
//                 title.addEventListener('click',()=>{
//                     fetch(`http://api.alquran.cloud/v1/surah/${index + 1}`)
//                     .then(response => response.json())
//                     .then(data=>{
//                         AyatContainer.innerHTML = "";
//                         let Ayat = data.data.ayahs;

                        
                        
//                         Ayat.forEach(aya=>{
//                             popup.classList.add('active');
//                             AyatContainer.innerHTML +=
//                             `<p>(${aya.numberInSurah}) - ${aya.text}</p> `
//                         })
//                     })
//                 })
//             })
//             let closePopup = document.querySelector('.close-popup');
//             closePopup.addEventListener('click',()=>{
//                 popup.classList.remove('active');
//             })
//     })
// }















//Surah Api
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
            
            SurahsContainer.innerHTML += 
            `
                <div class="surah">
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
                    fetch(`https://api.quran.sutanlab.id/surah/${index + 1}`)
                    .then(response => response.json())
                    .then(data=>{
                        AyatContainer.innerHTML = "";
                        let verses = data.data.verses;

                        
                        
                        verses.forEach(aya=>{
                            popup.classList.add('active');
                            AyatContainer.innerHTML +=
                            `
                            <p>(${aya.number.inSurah}) - ${aya.text.arab}</p>
                            <audio controls>
                            <source src="${aya.audio.primary}" type="audio/ogg">

                            Your browser does not support the audio element.
                        </audio>
                            `
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