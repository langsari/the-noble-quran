// -----------------START----------------
//  Javascript For Fetch All Surah Name From External API And Show In Home Page
   
///Surah container
let SurahsContainer = document.querySelector('.surahsContainer')

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
    
 
        /*
        surahs.forEach(sura => {

            SurahNum= sura.length;
            SurahsContainer.innerHTML += 
            `   
            <div class="surah"> 
            <br><a href='surah/${SurahNum}'>
            <div class="SurahNum"><span>${SurahNum}</span></div>
            <p class="SurahName">${sura[i].name}</p>
            <p>${sura[i].englishName}</p>
            <br></a>
            </div>
            `
        });*/

 
     
        

// -----------------END----------------






// -----------------START----------------
// Javascript For Fetch All Surah Audio From External API And Show In Surah Page
            /* Surah Title display */
        let DisTitle = document.getElementById('surah_title');
            /* Surah for fetching into it */
        let SurahsTitels = document.querySelectorAll('.surah');
            /* White boared that displays as background when ayat are displayed */
        let popup = document.querySelector('.surah-popup'),
              /* Ayat Container */
            AyatCont = document.querySelector('.ayat');   
             /* Translate Ayat Container */
        let TransCont = document.querySelector('.TransContainer');     
            /* Audio container */
        let AudioCont = document.querySelector('.AudioContainer')

            /* Fetching and displaying Ayat proccess */       
          SurahsTitels.forEach((title,index)=>{
              
                title.addEventListener('click',()=>{
                    fetch(`https://api.quran.sutanlab.id/surah/${index + 1}`)
                    .then(response => response.json())
                    .then(data=>{
                        AyatCont.innerHTML = "";
                        TransCont.innerHTML = "";
                        AudioCont.innerHTML="";
                        TransCont.style.display="none";
                        AyatCont.innerHTML += ` <img  class="text-center" src="بسم الله الرحمن الرحيم.png" width="300" />`
                        TransCont.innerHTML += ` <img  class="text-center" src="بسم الله الرحمن الرحيم.png" width="300" />`
                        DisTitle.innerHTML ="";
                        DisTitle.innerHTML =
                        surahs[index].name + `<br><br>` + surahs[index].englishName;

                        
                        let Ayat = data.data.verses;
                        Ayat.forEach((aya)=>{
                            popup.classList.add('active');
                            let i = aya.number.inSurah;

                            AyatCont.innerHTML +=
                            `
                            <h5>(${i})</h5> 
                           <audio id="player${i}"  class='text-center'>
                             <source src="${aya.audio.primary}" type="audio/ogg">
                             Your browser does not support the audio element.
                             </audio>
                             <br>
                             <div class='audio text-center '>
                                 <button class="play  btn btn-success" onclick="document.getElementById('player${i}').play()"></buttom>
                             
                                 <button class="pause  btn btn-danger" onclick="document.getElementById('player${i}').pause()"></button>
                            </div>

                            <p  class="ayatarb"> ${aya.text.arab}</p>   
                              
                             `;      

                             TransCont.innerHTML += 
                             `
                             <h5>(${i})</h5> 
                             <audio id="player${i}"  class='text-center'>
                             <source src="${aya.audio.primary}" type="audio/ogg">
                             Your browser does not support the audio element.
                             </audio>
                             <br>
                             <div class='audio text-center '>
                                 <button class="play  btn btn-success" onclick="document.getElementById('player${i}').play()"></buttom>
                            
                                 <button class="pause btn btn-danger" onclick="document.getElementById('player${i}').pause()"></button>
                            </div>

                             <p id="arb" class="ayatarba"> ${aya.text.arab}</p>
                             <p id="id" class="ayatid">${aya.translation.id}</p>
                             <p id="en" class="ayateng">${aya.translation.en}</p>  
                        
                             ` ;

                        
                                  })     
                                  
                                  let readAll = document.getElementById("ReadSurah");
                                  readAll.addEventListener('click',()=>{
                                                      
                                                                     
                                     for (let index=0; index < Ayat.length; index++){
                                        
                                         let surahNum=index + 1;
                                         AudioCont.innerHTML +=
                                          `
                                      <audio controls autoplay id="player${surahNum}"  class='text-center'>
                                      <source src="${Ayat[surahNum].audio.primary}" type="audio/ogg">
                                      </audio>
                                      `
                                     }     
                                  })
                    })
                })
                
            })

                let transBtn = document.getElementById("TranslateSurah");
                transBtn.addEventListener('click',()=>{
              
              if(TransCont.style.display === 'none'){
                  TransCont.style.display = "block";
                  AyatCont.style.display = "none";
                
              
              }else{
                  AyatCont.style.display="block";
                  TransCont.style.display = "none";
                
                  }
    
              
               })
    
    
           
                let closePopup = document.querySelector('.close-popup');
                closePopup.addEventListener('click',()=>{
                    popup.classList.remove('active');
                    AyatCont.style.display="block";
                    TransCont.style.display = "none";
                })
            
            


            

        })
        }           
  



         


    


      



// -----------------END----------------



/*let transButt = document.getElementById("TranslateSurah");
transButt.addEventListener('click',()=>{   
                        let id = document.getElementById("idT");
                        let en = document.getElementById("enT");
                        let arb = document.getElementById("arbT"); 
                        id.classList.add('active');
                        en.classList.add('active');
                        arb.classList.add('active');
        
                        })*/