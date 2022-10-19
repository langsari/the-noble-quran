
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto">
 
<li class="nav-item">
 <a class="nav-link" href="{{ route('thai.index') }}">Manage Quran</a> 
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('qurantafseers.index') }}">Manage Quran Tafseer</a>   
   </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('tafseers.index') }}">Manage Video Tafseer</a> 
   </li>
   
    @if (Auth::user()->is_admin=='1')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}">Manage User</a>
    </li>  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('managenote') }}">Manage Neot</a>
    </li> 
    @elseif (Auth::user()->is_admin=='2')
    </li> <li class="nav-item">
        <a class="nav-link" href="{{ route('showquran') }}">Check Status Quran</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showtafseer') }}">Check Status Quran Tafseer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">Check Status Video Tafseer</a>
      </li>
      
                  @endif

</ul>
</nav>
</div>    
<br>
<h1 class="h4 text-gray-900 mb-4">Tafseer</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
       

        <div class ="card-text">   
        <strong>No. of Surah : </strong>
        {{ $qurantafseer->datasurah_id }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>Name : </strong>
        {{ $qurantafseer->name }}
      </div>  
      <br>
      <div class ="card-text">   
        <strong>Tafseer : </strong>
        {{ $qurantafseer->qurantafseer }}
      </div>    
      <br>
      <div class ="card-text">   
        <strong>Source : </strong>
        {{ $qurantafseer->resource }}
      </div>    
      <br>
      <div class ="card-text">   
        <strong>No. of Ayah : </strong>
        {{ $qurantafseer->arabic_id }}
      </div>    
      <br>
        <a href ="{{ route('qurantafseers.index') }}" class ="btn btn-success my-0">Back </a>
    </div>

@endsection