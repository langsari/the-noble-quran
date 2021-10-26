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
        <a href="/info/{{$id}}"><span>Surah Info</span></a>&emsp;

    </div>

</div>


<div>

    @foreach($quransinfo as $quran)
    
    <div class="Ayah">   
     <li>{{$quran->SuraName}} &emsp;<span class="#"> จำนวนอายะห์  : {{$quran->VerseID}}</span> 
        &emsp;<span class="#"> ประทานที่  : {{$quran->Place}}</span></li>   
     <i><span class="#">{{$quran->Name}}</span> </li>   <br><br>
     <i><span class="#"> {{$quran->Info}}</span> </li> 
    </div>
  
    @endforeach 

</div>   

