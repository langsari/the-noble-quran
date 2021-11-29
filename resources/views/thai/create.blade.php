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
 <a class="nav-link" href="{{ route('thai.index') }}">จัดการกุรอาน</a> 
</li>
<li class="nav-item">
    <a class="nav-link" href="{{ route('qurantafseers.index') }}">จัดการกุรอานตัฟซีร</a>   
   </li>
    <li class="nav-item">
    <a class="nav-link" href="{{ route('tafseers.index') }}">จัดการวิดีโอตัฟซีร</a> 
   </li>
   
    @if (Auth::user()->is_admin=='1')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}">จัดการผู้ใช้</a>
    </li>  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('managenote') }}">จัดการโน้ต</a>
    </li> 
    @elseif (Auth::user()->is_admin=='2')
    </li> <li class="nav-item">
        <a class="nav-link" href="{{ route('showquran') }}">ตรวจสอบสถานะกุรอาน</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showtafseer') }}">ตรวจสอบสถานะกุรอานตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">ตรวจสอบสถานะวิดีโอตัฟซีร</a>
      </li>
                  @endif
  </ul>
</nav>
</div>    
<br>

<h class="h4 text-gray-900 mb-4">เพิ่มผู้ใช้งาน</h>
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

<form action="{{ route('thai.store') }}" method="post">
    @csrf
    <!-- <input type="text" name="id" class="form-control mb-3" placeholder="ที่"/> -->
   
    <input type="text" name="ayat" class="form-control mb-3" placeholder="อายะห์ที่" value="{{ $thai->ayat }}"/>
  
    <textarea class="form-control mb-3" name="Text" rows="4" placeholder="คำแปล">{{ $thai->Text}}</textarea>
 
    <input type="text" name="audio" class="form-control mb-3" placeholder="เสียง" value="{{ $thai->audio }}"/>
    
 
    <input type="text" name="datasurah_id" class="form-control mb-3" placeholder="ซูเราะห์ที่" value="{{ $thai->datasurah_id }}"/>
    
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
    <a href ="{{ route('thai.index') }}" class ="btn btn-success my-0"> กลับ </a>
</form>

@endsection