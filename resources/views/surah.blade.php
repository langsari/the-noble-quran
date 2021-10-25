


@extends('main')

@section('title', 'The-Nobal-Quran | Surah')

@section('content1')

@include('layouts.navbar')
<body style="background-color: #212529;">
    


    <div class="container my-5">

        <h3 class="text-center " id="surah_title"></h3>

        <div class="row d-flex justify-content-center  my-5 ">

        </div>





{{-- Navagation --}}
    <ul class="justify-content-center nav nav-pills mb-3" id="pills-tab" role="tablist">
    {{-- Ayat Tab --}}
    <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Ayat</a>
  </li>

  {{-- Translation Tab --}}
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Translation</a>
  </li>

  {{-- Surah Info Tab --}}
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Surah Info</a>
  </li>
</ul>
{{-- End of Navagation--}}


{{--Sections Beginning--}}
<div class="tab-content" id="pills-tabContent">

{{--Ayat Section--}}
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                              <!-- Start Small button groups (default and split) -->
                              <div class="sticky-top btn-group ">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Ayat
                            </button>
                            <div id="select" class="dropdown-menu box-shadow">
                            </div>
                        </div>
                        <!-- End Small button groups (default and split) -->
  <ul class="ayat text-center" style="padding-left: 0px; list-style:none:">
                        </ul>
  </div>
  {{--End of Ayat Section--}}



  {{--Translation Section--}}
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                              <!-- Start Small button groups (default and split) -->
                              <div class="sticky-top btn-group ">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                Ayat
                            </button>
                            <div id="select" class="dropdown-menu box-shadow">
                            </div>
                        </div>
                        <!-- End Small button groups (default and split) -->
  <ul class="TransContainer text-center" style="padding-left: 0px; list-style:none:">
                        </ul>    
  </div>
{{--End of Translation Section--}}



  {{--Surah Info Section--}}
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
      
  <div class="row d-flex justify-content-center  my-2">

<div class=" col-12 w-75" id="surah_info_section">


    <div class="card text-center ">
        <div class="card-body ">
            <h5 id="surah_name" class="card-title"></h5>
            
            {{-- <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the card's content.
                </p> --}}
        </div>
        <ul class="list-group list-group-flush">
            <li id="surah_number" class="list-group-item"></li>
            <li class="list-group-item" id="numberOfVerses"></li>
            <li class="list-group-item" id="revelation"></li>
        </ul>
        <div class="card-body">
            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
    </div>
</div>
</div>

  </div>
  {{--End of Surah Info Section--}}
</div>
{{--Sections Ending--}}













 
            {{-- Start Ayat surah --}}
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                {{-- Start Display Ayat section --}}
                <div class="row d-flex justify-content-center  my-2 ">
                    <div class=" col-12 w-75" id="surah_tf_section">
      

                        <div class="container my-5">
<div class="AudioContainer" style="display: none;">
</div>
                        <ul class="ayat text-center" style="padding-left: 0px; list-style:none:">
                        </ul>
                    </div>
                </div>
                {{-- End Display Ayat section --}}
            </div>
            {{-- End Ayat surah --}}


            {{-- Start Ayat Translate surah --}}
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">

                {{-- Start Display Ayat Translate section --}}
                <div class="row d-flex justify-content-center  my-2 ">
                    <div class=" col-12 w-75" id="surah_tf_section">
                        <div class="container my-5">
<div class="AudioContainer" style="display: none;">
</div>
                        <ul class="TransContainer text-center" style="padding-left: 0px; list-style:none:">
                        </ul>
                    </div>

                </div>
                {{-- End Display Ayat Translate section --}}
            </div>
            {{-- End Ayat Translate surah --}}



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
                            <h5 style="color: #ffffff;">(${index+1})</h5> 
                             <audio id="player${index+1}"  class='text-center'>
                             <source src="${Ayat[index].audio.primary}" type="audio/ogg">
                             Your browser does not support the audio element.
                             </audio>
                             <br>
                             <div class="audio text-center">
                                 <button class="play  btn btn-success" onclick="document.getElementById('player${index+1}').play()"></buttom>
                            
                                 <button class="pause btn btn-danger" onclick="document.getElementById('player${index+1}').pause()"></button>
                           
                            <p  class="ayatarb"> ${Ayat[index].text.arab}</p>   
                   
                             `;      

                             audioaya+= 
                             `
                            `;


                            trans+= 
                             `
                             <h5 style="color: #ffffff;">(${index+1})</h5> 
                             <audio id="player${index+1}"  class='text-center'>
                             <source src="${Ayat[index].audio.primary}" type="audio/ogg">
                             Your browser does not support the audio element.
                             </audio>
                             <br>
                             <div class='audio text-center '>
                                 <button class="play  btn btn-success" onclick="document.getElementById('player${index+1}').play()"></buttom>
                            
                                 <button class="pause btn btn-danger" onclick="document.getElementById('player${index+1}').pause()"></button>
                            </div>
                            <div class="text-center justify-content-center" style="margin:auto; width:80%;">
                             <p id="arb" class="ayatarba"> ${Ayat[index].text.arab}</p>
                             <p class="ayatliter">${Ayat[index].text.transliteration.en}</p> 
                             <br> 
                             <p style="font-size=16px; color:#f4623a;">Indonisian</p>
                             <p id="id" class="ayatid">${Ayat[index].translation.id}</p>
                             <br>
                             <p class="text-center" style="font-size=16px; color:#f4623a;">English</p>
                             <p id="en" class="ayateng">${Ayat[index].translation.en}</p>
                            </div>
                        
                             ` ;}
                             
                             
                             AyatCont.innerHTML=  arbtxt;
                             TransCont.innerHTML= trans;


                             let verses = data.data.verses;
                      console.log(data)

                      //surah info
                      surah_title.innerHTML = `<h2 style="color:white;">` + data.data.name.translation.en + " - " + data.data.name.long +
                          "</h2>";
                      surah_name.innerHTML = `<h2 style="color:white;">` + data.data.name.translation.en + " - " + data.data.name.long +
                          "</h2>";
                      surah_number.innerHTML = "<h5>Surah Number :<span> " + data.data.number + "</span></h5>";
                      numberOfVerses.innerHTML = "<h5>Number Of Verses :<span> " + data.data.numberOfVerses +
                          "</span></h5>";
                      revelation.innerHTML = "<h5>Revelation Place :<span> " + data.data.revelation.en + " - " + data.data
                          .revelation.arab + "</span></h5>";
                      let i = 1;
                      let j = 500;


                        
                                  })     

                                  
                                  
 
        </script>







</div>


</body>

    @endsection


    
