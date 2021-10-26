@extends('layouts.navbar')
<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap');
    
   
   .translation{
   
    /*background-color: #70ca6c;*/
    font-family: 'Scheherazade New', serif;
   

  
   }
   .ayah{
       text-align: right;
       font-size: 25px;
       margin-right: 15rem;
       padding-top: 2rem; 
       padding-left: 25rem;
       color: #019275;
   }
   .lang_th{
    font-size: 20px;
    margin-left: 25rem;
    padding-top: 5rem; 
    padding-right: 15rem;

   }
   .ayah__number{
       position: absolute;
       text-align: left;
      /* background-color: #019275;*/
       margin-left: 15.8rem;
       margin-top: -3.5rem;
 
     /* color: rgb(248, 255, 253);*/
       font-size: 25px;
   }
   /*.number{
       position: absolute;
       /*background-color: #019275;*/
      /* color: rgb(248, 255, 253);
      color: rgb(250, 9, 9);
     width: 5rem;
       height: 5rem;
       border-radius: 50%;  
       font-size: 20px;*/
   }
    .bx .bxs-checkbox{
    background-color: #019275;
    padding-left: 3rem;
    width: 50px;
  }
   /*.ayah li{
       display: block;
       /*padding: 30px; 
       margin: 30px;
       font-size: 20px;
   }*/
   
   
   .container{
       text-align: center;
       margin-top: 100px:
      
   }
   .button{
       background-color: #019275;
       width: 300px;
       text-align: center;
       /*color: rgb(248, 255, 253);*/
       margin-left: 33rem;
       margin-top: 2rem;  
   }
   .button a{
       color: rgb(248, 255, 253);
   }
   hr{
       background-color: #019275;
       width: 70%      
   }
   .box{
       width: 300px;
       position: absolute;

       z-index: -10;
       margin-top: -7rem;
       margin-left: 7rem;
   }
   .box1{
       width: 300px;
       position: absolute;

       z-index: -10;
       margin-top: -4rem;
       margin-left: 7rem;
   }
   .box2{
       width: 300px;
       position: absolute;

       z-index: -10;
       margin-top: -1rem;
       margin-left: 7rem;
   }
   .box3{
       width: 300px;
       position: absolute;

       z-index: -10;
       margin-top: 2rem;
       margin-left: 7rem;
   }
   .bx .bx-play{
       position: absolute;
   }
   /*#play{
       position: absolute;
       width:1000px;
     

       z-index: -10;
       margin-top: 0.6rem;
       margin-left: 15.6rem;*/


   }

   </style>
   

<div class="container">
    <div class="button">
        <a href="/th/{{ $id}}"><span>Translation</span></a> &emsp; 
        <a href="/ayah/{{$id}}"><span>Reading</span></a>&emsp;
        <a href="/info/{{$id}}"><span>Surah Info</span></a>&emsp;
        {{-- <span>Surah Info</span> --}}

    </div>

</div>



    <div class="translation"> 
    @for ($i = 0; $i < $quransarab->count(); $i++)

     <div class="ayah">{{ $quransarab[$i]->AyahText }}</div>
     <div class="ayah__number"> {{$quransarab[$i]->VerseID}} </div>
        <div class="audio{{$i}}">
            
        </div>
        {{-- <img  src="{{asset('img/Box.png')}}" alt="" class="box" >
        <img src="{{asset('img/Box.png')}}" alt="" class="box1" > 
        <img src="{{asset('img/Box.png')}}" alt="" class="box2">
        <img src="{{asset('img/Box.png')}}" alt="" class="box3"> --}}


     <div class="lang_th">{{ $quransthai[$i]->AyahText }}  </div>
        <br>
        <hr>
        
    @endfor
    
    </div>
    {{-- @foreach($quransthai as $quranthai)
    
    <div class="Ayah">   
     <li>{{$quranthai->AyahText}} &emsp;<span class="Number"> {{$quranthai->VerseID}}</span> </li>   
    </div>
    
    @endforeach --}}
          

    <script>
    var url = window.location.href;
    var newUrl = url.split('/');
    var id = newUrl[newUrl.length - 1];
    //  let audio=document.getElementById('audio')
     fetch(`https://api.quran.sutanlab.id/surah/${id}`)
        .then(response => response.json())
        .then(data=>{ 
            let verses = data.data.verses;

                        let audio = "";
                        for (let index = 0; index < verses.length; index++) {
                            let audioDivSelect = `.audio${index}`;
                            let audioDiv = document.querySelector(audioDivSelect);

                             //  Start Get all vesres With transilation
                             audio =
                                `
                                <div  class='custom-play-audio-position'>
                                    <audio id="player${index}"  class='text-center'>
                                    <source src="${verses[index].audio.primary}" type="audio/ogg">
                                    Your browser does not support the audio element.
                                    </audio>
                                    <br>
                                    <div class='text-center '>
                                        <button title="Playe" class="rounded-lg btn btn  btn-sm btn-lg" onclick="document.getElementById('player${index}').play()"><i class="fas fa-play  fa-sm"></i></button>
                                        <button title="Pause" class="rounded-lg btn  btn-sm" onclick="document.getElementById('player${index}').pause()"><i class="fas fa-pause fa-1x"></i></button>
                                        </div>
                                           
                                            
                                    </div>
                                    `
                                    audioDiv.innerHTML = audio;
                                }

                            })
                                
                 
     
     </script>


{{-- <div class='text-center '>
    <button title="Playe" class="rounded-lg btn btn btn-success btn-sm btn-lg" onclick="document.getElementById('player${index}').play()"><i class="fas fa-play  fa-sm"></i></button>
    <button title="Pause" class="rounded-lg btn btn-danger btn-sm" onclick="document.getElementById('player${index}').pause()"><i class="fas fa-pause fa-1x"></i></button>
    </div> --}}