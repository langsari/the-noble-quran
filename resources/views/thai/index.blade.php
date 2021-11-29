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
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">จัดการอัลกุรอาน</h1>

                        </div>
<!-- <a class="btn btn-link float-end" href="{{ route('tafseers.create') }}">เพิ่มตัฟซีร</a> -->
<!-- <a href ="{{ route('thai.create')}}" class ="btn btn-dark my-3"> เพิ่มผู้ใช้งาน </a> -->

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif


<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr></tr>
        <tr>
            <!-- <th scope="col">ที่</th> -->
            <th style="width:8%" scope="col">อายะห์ที่</th>
            <th scope="col">คำแปล</th> 
            <th scope="col">เสียง</th>
            <th style="width:8%" scope="col">ซูเราะห์ที่</th>
            <th scope="col">สถานะ</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($thais as $thai) {{-- Loop thais --}}
        <tr>
            <!-- <th scope="row">{{ $loop->iteration }}</th> -->
            <td>{{ $thai->ayat }}</td>
            <td>{{ $thai->Text }}</td>
            <td>{{ $thai->audio }}</td>
            <td>{{ $thai->datasurah_id }}</td>
            <td>{{ $thai->status }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('thai.show', $thai->id) }}">ดู</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('thai.edit', $thai->id) }}">แก้ไข</a></li> {{-- Edit --}}
                      
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

{{$thais->links()}}
</div>
@endsection
