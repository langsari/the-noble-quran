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
        <a class="nav-link" href="QuranVideos.php">จัดการกุรอาน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="hometest.php">จัดารผู้ใช้</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login-form.html">จัดการตัฟซัร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="login-form.html">จัดการโน้ต</a>
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
<div class ="container">
  <table class="table table-hover table-bordered border-success table-striped">
  
    <thead >
    <tr class="table-success">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อซูเราะห์</th>
        <th scope="col">ชื่อภาษาอาหรับ</th>
        <th scope="col">ประทานที่</th>
        <th scope="col">จำนวนอายะห์</th>
     </tr> 
  
   <thead>
  <tbody>

  @foreach($datasurahs as $datasurah)  
  <tr class="table-success ">
      <td>{{ $datasurah->id}}</td>
      <td>
     
        <a href ="{{ route('adminmnquran') }}" class="link-dark" >
        {{ $datasurah->th_name}}</a></td>
      <td>{{ $datasurah->surah_arab}})</td>
      <td>{{ $datasurah->type}}</td>
      <td>{{ $datasurah->whole_ayah}}</td>
  </tr> 
  @endforeach
  </tbody> 
  </table>
  {{$datasurahs->links()}}

</div>
@endsection



