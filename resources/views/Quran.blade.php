<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="css/bootstrap.min.css " rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">


  
</head>
<body>
    <!--quran section-->
    <section class="quran">
        <h3>القرآن الكريم</h3>
        <div class="container">
            <div class="surahasContainer">
                
                
            </div>
            
        </div>
    </section>
    <!--End of Quran sectionn -->
    <!-- Pop UP-->
    <div class="surah-popup">
        <div class="close-popup">
            <i class="fas fa-times">X</i>
        </div>
        <div class="ayat">
        </div>
    </div>
    <!-- Js File-->
    <script src="script.js"></script>

    <script src="{{asset('js/application-33c3ffb37027f82f32b1.chunk.js')}}"></script>   
    <script src="{{asset('js/bootstrap.js')}} defer" ></script>
    <script src="{{asset('js/runtime~application-006109b2f6553db0346e.js')}}"></script>
    <script src="{{asset('js/vendors~application-ab9132ce4363dc9f8e61.chunk.js')}}"></script>   
    <script src="{{asset('js/script.js')}} defer"></script>



    <script> //Surah Api
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
        } </script>
</body>
</html>