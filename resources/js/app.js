///Surah Api
let SurahsContainer = document.querySelector('.surahasContainer')
getSurahs()
function getSurahs()
{
    ///fetch surahs meta data {Name of Surahs}
    fetch(`http://api.alquran.cloud/v1/meta`)
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
            <br>
            <div class="SurahNum"><span>${SurahNum}</span></div>
            <p class="SurahName">${surahs[i].name}</p>
            <p>${surahs[i].englishName}</p>
            <br>
            </div>
            ` 
        }
        

        
            /* Ayat Text */
        let engAyatContainer = document.querySelector('.ayateng');
        let newTitle = document.getElementById('surah_title');
        let SurahsTitels = document.querySelectorAll('.surah');
        let popup = document.querySelector('.surah-popup'), 
            AyatContainer = document.querySelector('.ayat');
            SurahsTitels.forEach((title,index)=>{
                title.addEventListener('click',()=>{
                    fetch(`https://api.quran.sutanlab.id/surah/${index + 1}`)
                    .then(response => response.json())
                    /* Ayat Arabic Original */
                    .then(data=>{
                        AyatContainer.innerHTML = "";
                        AyatContainer.innerHTML += ` <img  class="text-center" src="https://www.sqorebda3.com/vb/attachments/9954/" width="300" />`
                        newTitle.innerHTML ="";
                        newTitle.innerHTML =
                         surahs[index].name + `<br><br>` + surahs[index].englishName;

                        
                        let Ayat = data.data.verses;
                        Ayat.forEach((aya)=>{
                            popup.classList.add('active');
                            AyatContainer.innerHTML +=
                            `
                            <p class="ayatarb">(${aya.number.inSurah}) <br> ${aya.text.arab}</p>
                            <p class="ayateng">${aya.translation.en}</p
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