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
      <a class="nav-link" href="{{ route('tafseers.index') }}">Manage Tafseer Video</a>
      </li> <li class="nav-item">
        <a class="nav-link" href="{{ route('showquran') }}">Check Status Quran</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showtafseer') }}">Check Status Tafseer Quran</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">Check Status Tafseer Video</a>
      </li>
  </ul>
</nav>
</div>    
<br>
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Check Status Quran</h1>

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
        <tr></tr>
        <tr>
            <!-- <th scope="col">ที่</th> -->
            <th style="width:8%" scope="col">Ayah No.</th>
            <th scope="col">Translate</th> 
            <th scope="col">Sound</th>
            <th style="width:8%" scope="col">Surah No.</th>
            <th scope="col">Status</th>
            <th scope="col">Okay</th>
            <th scope="col">Cancle</th>
            <!-- <th scope="col">Action</th> -->
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
                <a class="btn btn-success"href="
                {{url('approvedquran',$thai->id)}}">Okay</a>
            </td>
            <td>
                <a class="btn btn-danger"href="
                {{url('cancledquran',$thai->id)}}">Cancle</a>
            </td>
           ]
        </tr>
        @endforeach

    </tbody>
</table>

{{$thais->links()}}
</div>
@endsection
