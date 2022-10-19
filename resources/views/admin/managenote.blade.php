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
    <a class="nav-link" href="{{ route('qurantafseers.index') }}">Manage Tafseer Quran</a>
      </li>
     
      <li class="nav-item">
      <a class="nav-link" href="{{ route('tafseers.index') }}">Manage Tafseer Vedio</a>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('user.index') }}">Manage User</a>
      </li>
      
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('managenote') }}">Manage Note</a>
      </li>
    
  </ul>
</nav>
</div>    
<br>
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Manage Note</h1>

                        </div>
<!-- <a class="btn btn-link float-end" href="{{ route('tafseers.create') }}">Add Tafseer</a> -->
<!-- <a href ="{{ route('thai.create')}}" class ="btn btn-dark my-3"> Add User </a> -->

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif




<table class="table table-striped table-hover table-bordered">
    <thead>
 <tr>
    <th scope="col">ที่</th>
    <th scope="col">หัวข้อ</th>
    <th scope="col">คำอธิบาย</th>
    <th scope="col">ชื่อผู้ใช้</th>
    <!-- <th scope="col">Action</th> -->
 </tr>
 </thead>
    <tbody>
    @foreach ($datas as $data)
    <tr>
       
        <td>{{ $loop->iteration }} </td> 
        <td>{{ $data->title }}</td>
        <td>{{ Str::limit($data->description, 100) }}</td>
        <td>{{$data->user->name}}</td>
        
       
    </tr>    
 @endforeach

 </tbody>
</table>





@endsection
