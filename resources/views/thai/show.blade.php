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
        <a class="nav-link" href="{{ route('approvalstatus') }}">ตรวจสอบสถานะ</a>
      </li>
      @elseif (Auth::user()->is_admin=='3')
      <li class="nav-item">
      <a class="nav-link" href="{{ route('viewstatus') }}">ติดตามสถานะ</a>
    </li>
                  @endif
 
  </ul>
</nav>
</div>    
<br>
<h1 class="h4 text-gray-900 mb-4">ข้อมูลผู้ใช้งาน</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
    <div class ="card-text">   
        <strong>ที่ : </strong>
        {{ $thai->ayat }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>ชื่อ : </strong>
        {{ $thai->Text }}
      </div> 
      <br>
      <div class ="card-text">   
        <strong>ดีกรี : </strong>
        {{ $thai->audio }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>อีเมลล์ : </strong>
        {{ $thai->arabic_id }}
      </div>  
      <br>
     
        <a href ="{{ route('thai.index') }}" class ="btn btn-success my-0"> กลับ </a>
    </div>

@endsection