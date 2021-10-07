
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qur'an Al-Kareem</title>
    <!--bootstrap-->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <!--Quran css-->
    <link rel="stylesheet" type="text/css" href="https://www.al-quran.cc/css/layout.css" />
    <!--font-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Droid+Serif">
    <link rel="stylesheet" href="{{asset('css/app.css')}}"> 
</head>

<body>  
@include('navbar')

            <div class="container my-5">


        <p class="text-center " id="surah_title"></p>
               

        
        <div class="row d-flex justify-content-center  my-5 text-center">

            <nav class="navbar navbar-light bg-light">
                <p class=" text-center">

        
                  <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#surah_info_section"
                        aria-expanded="false" aria-controls="collapseExample" id="TranslateSurah">
                        translation  
                    </button> 

        
                    <button class="btn btn-primary " type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                        Video
                    </button>

    
                </p>
            </nav>
        </div>
        



        
        <!--Ayat Container-->
       <div class="ayat text-center">
        <!-- Where Ayat are displayed-->
        </div>

        <!--Translation Container-->
        <div class="TransContainer text-center">
        <!-- Where Translation are displayed-->    
        </div>

        <div class="AudioContainer" style="display: none;">

        </div>


        <script>
// -----------------START----------------
// Javascript For Fetch All Surah Audio From External API And Show In Surah Page
         
var url = window.location.href;
var newUrl = url.split('/');
var id = newUrl[newUrl.length - 1];

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
          
              
              
                    fetch(`https://api.quran.sutanlab.id/surah/${id}`)
                    .then(response => response.json())
                    .then(data=>{
                        let surah = data.data.name;
                        AyatCont.innerHTML = "";
                        TransCont.innerHTML = "";
                        AudioCont.innerHTML="";
                        TransCont.style.display="none";
                        AudioCont.style.display="block";
                        DisTitle.innerHTML ="";
                        DisTitle.innerHTML =
                        surah.short + `<br><br>` + surah.transliteration.en;
                        AyatCont.innerHTML += `<img  class="text-center" src="/img/basmalah.png" width="300" />`;
                        TransCont.innerHTML += `<img  class="text-center" src="/img/basmalah.png" width="300" />`;
                        let Ayat = data.data.verses;
                        let arbtxt="";
                        let audioaya="";
                        let trans="";
                        for(let index =0; index < Ayat.length; index++){
                        
                       

                             arbtxt+=
                            `
                            <h5>(${index+1})</h5> 
                             <audio id="player${index+1}"  class='text-center'>
                             <source src="${Ayat[index].audio.primary}" type="audio/ogg">
                             Your browser does not support the audio element.
                             </audio>
                             <br>
                             <div class='audio text-center '>
                                 <button class="play  btn btn-success" onclick="document.getElementById('player${index+1}').play()"></buttom>
                            
                                 <button class="pause btn btn-danger" onclick="document.getElementById('player${index+1}').pause()"></button>
                            </div>
                            <p  class="ayatarb"> ${Ayat[index].text.arab}</p>   
                              
                             `;      

                             audioaya+= 
                             `
                            `;


                            trans+= 
                             `
                             <h5>(${index+1})</h5> 
                             <audio id="player${index+1}"  class='text-center'>
                             <source src="${Ayat[index].audio.primary}" type="audio/ogg">
                             Your browser does not support the audio element.
                             </audio>
                             <br>
                             <div class='audio text-center '>
                                 <button class="play  btn btn-success" onclick="document.getElementById('player${index+1}').play()"></buttom>
                            
                                 <button class="pause btn btn-danger" onclick="document.getElementById('player${index+1}').pause()"></button>
                            </div>
                             <p id="arb" class="ayatarba"> ${Ayat[index].text.arab}</p>
                             <p id="id" class="ayatid">${Ayat[index].translation.id}</p>
                             <p id="en" class="ayateng">${Ayat[index].translation.en}</p>  
                        
                             ` ;}
                             
                             
                             AyatCont.innerHTML=  arbtxt;
                             TransCont.innerHTML= trans;

                        
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
        </script>
        </body>
</html>