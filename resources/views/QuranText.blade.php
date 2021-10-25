@extends('layouts.navbar')
<style>
 @import url('https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap');
 

.Ayah{

 /*background-color: #70ca6c;*/
 text-align: center;
 font-family: 'Scheherazade New', serif;


    
}
.Ayah li{
    display: block;
    /*padding: 30px; */
    margin: 30px;
    font-size: 20px;
}

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
</style>


<div class="container">
    <div class="button">
        <a href="/th/{{ $id}}"><span>Translation</span></a> &emsp;
        <a href="/ayah/{{$id}}"><span>Reading</span></a>&emsp;
        <a href="#"><span>Surah Info</span></a>

    </div>

</div>


<div>

    @foreach($qurans as $quran)
    
    <div class="Ayah">   
     <li>{{$quran->AyahText}} &emsp;<span class="Number"> {{$quran->VerseID}}</span> </li>   
    </div>
    
    @endforeach 

</div>   

