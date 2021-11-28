
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
    <li class="nav-item">
        <a class="nav-link" href="{{ route('showquran') }}">ตรวจสอบสถานะกุรอาน</a>
      </li>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">ตรวจสอบสถานะวิดีโอตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showtafseer') }}">ตรวจสอบสถานะตัฟซีร</a>
      </li>
      
                  @endif
</ul>
</nav>
</div>    
<br>

<h class="h4 text-gray-900 mb-4">เเก้ไขวิดีโอตัฟซีร</h>
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
    <strong>ลำดับซูเราะห์ : </strong>
    <input type="number" name="datasurah_id" class="form-control mb-3" placeholder="ํ" value="{{ $qurantafseer->datasurah_id }}"/>
    <strong>ชื่อ : </strong>
    <input type="text" name="name" class="form-control mb-3" placeholder="ชื่อ" value="{{ $qurantafseer->name }}"/>
    
   
    
    <strong>ตัฟซีร : </strong>
    <textarea class="form-control mb-3" name="qurantafseer" rows="4" placeholder="ที่มา">{{ $qurantafseer->qurantafseer}}</textarea>

    

    <strong>ที่มา : </strong>
    <input type="text" name="resource" class="form-control mb-3" placeholder="ที่มา" value="{{ $qurantafseer->resource }}"/>
    <strong>อายะห์ที่ : </strong>
    <input type="number" name="arabic_id" class="form-control mb-3" placeholder="ํ" value="{{ $qurantafseer->arabic_id }}"/>
    <a href ="{{ route('qurantafseers.index') }}" class ="btn btn-success my-0"> กลับ </a>
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
</form>

@endsection 