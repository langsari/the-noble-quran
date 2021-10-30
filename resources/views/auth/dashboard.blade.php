@extends('app')

@section('contentsignin')

    <div class="container mt-5" style="max-width: 500px">
        <div class="d-grid">
          <a href="{{ route('logout') }}" class="btn btn-danger">Sign-out</a>
        </div>  
    </div>

@yield('content')
@endsection