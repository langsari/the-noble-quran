@extends('layouts.navbar')

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
  

   </style>
   

<div class="container">
    <div class="button">
        <a href="/th/{{ $id}}"><span>Translation</span></a> &emsp; 
        <a href="/ayah/{{$id}}"><span>Reading</span></a>&emsp;
        <span>Surah Info</span>

    </div>

</div>



    <div class="translation"> 
    @for ($i = 0; $i < $quransarab->count(); $i++)

     <div class="ayah">{{ $quransarab[$i]->AyahText }}</div>
     <div class="ayah__number"> {{$quransarab[$i]->VerseID}} </div>
        
        <img  src="{{asset('img/Box.png')}}" alt="" class="box" >
        <img src="{{asset('img/Box.png')}}" alt="" class="box1" > 
        <img src="{{asset('img/Box.png')}}" alt="" class="box2">
        <img src="{{asset('img/Box.png')}}" alt="" class="box3">


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
          

