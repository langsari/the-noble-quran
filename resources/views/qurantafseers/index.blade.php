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
    <a class="nav-link" href="{{ route('tafseers.index') }}">Manage Video tafseer</a> 
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
        <a class="nav-link" href="{{ route('showtafseer') }}">Check Status Tafseer</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('showvdotafseer') }}">Check Status Video Tafseer</a>
      </li>
      
                  @endif
 
  </ul>
</nav>
</div>    
<br>
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">Manage Tafseer</h1>
                       
                        </div>
<!-- <a class="btn btn-link float-end" href="{{ route('tafseers.create') }}">เพิ่มตัฟซีร</a> -->
<div class="row mt-2">
    <div class ="col-md-12">
    <a href ="{{ route('qurantafseers.create')}}" class ="btn btn-dark my-3"> Add Tafseer </a>


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
            <th scope="col">At</th>
            <th scope="col">Name</th>
            <th scope="col">Tafseer</th>
            <th scope="col">Source</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($tafseers as $tafseer) {{-- Loop tafseers --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $tafseer->name }}</td>
            <td>{{ $tafseer->qurantafseer }}</td>
            <td>{{ $tafseer->resource }}</td>
            <td>{{ $tafseer->status }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('qurantafseers.show', $tafseer->id) }}">View</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('qurantafseers.edit', $tafseer->id) }}">Edit</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('qurantafseers.destroy', $tafseer->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

@endsection