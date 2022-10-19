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
        <a class="nav-link" href="{{ route('showtafseer') }}">Check Status Tafseer Quranร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">Check Status Tafseer Video</a>
      </li>
   
    </ul>
</nav>
</div>

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>

<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Check Status Tafseer Video</h1>

                        </div>


<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr></tr>
        <tr>
            <th scope="col">At</th>
            <th scope="col">Name</th>
            <th scope="col">Youtube ID</th>
            <th scope="col">User Name</th>

            <th scope="col">Status</th>
            <th scope="col">Okay</th>
            <th scope="col">Cancle</th>
            <!-- <th scope="col">Action</th> -->
        </tr>
    </thead>
    <tbody>

        @foreach ($tafseers as $tafseer) {{-- Loop tafseers --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $tafseer->name }}</td>
            <td>{{ $tafseer->youtubeId }}</td>
            <td>{{$tafseer->user->name}}</td>

            <td>{{ $tafseer->status }}</td>
            
            <td>
                <a class="btn btn-success"href="
                {{url('approvedvdotafseer',$tafseer->id)}}">Okay</a>
            </td>
            <td>
                <a class="btn btn-danger"href="
                {{url('cancledvdotafseer',$tafseer->id)}}">Cancle</a>
            </td>
       
        </tr>
        @endforeach

    </tbody>
</table>
{{$tafseers->links()}}

@endsection