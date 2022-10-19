
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
      <a class="nav-link" href="{{ route('managenote') }}">Manage Note</a>
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

<h class="h4 text-gray-900 mb-4">Edit Quran Tafseer</h>
<hr/>

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('qurantafseers.update', $qurantafseer->id) }}" method="post">
    @csrf
    @method('put')
    <strong>No. of Surah : </strong>
    <input type="number" name="datasurah_id" class="form-control mb-3" placeholder="ํ" value="{{ $qurantafseer->datasurah_id }}"/>
    <strong>Name : </strong>
    <input type="text" name="name" class="form-control mb-3" placeholder="Name" value="{{ $qurantafseer->name }}"/>
    
   
    
    <strong>Tafseer : </strong>
    <textarea class="form-control mb-3" name="qurantafseer" rows="4" placeholder="source">{{ $qurantafseer->qurantafseer}}</textarea>

    

    <strong>Source : </strong>
    <input type="text" name="resource" class="form-control mb-3" placeholder="Source" value="{{ $qurantafseer->resource }}"/>
    <strong>No. of Ayah : </strong>
    <input type="number" name="arabic_id" class="form-control mb-3" placeholder="ํ" value="{{ $qurantafseer->arabic_id }}"/>
    <a href ="{{ route('qurantafseers.index') }}" class ="btn btn-success my-0"> Back </a>
    <button class="btn btn-primary float-end px-5" type="submit">Save</button>
</form>

@endsection 