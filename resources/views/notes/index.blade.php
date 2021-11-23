@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
  

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto">
  @if (Auth::user()->is_admin=='1')
    <li class="nav-item">
      <a class="nav-link" href="{{ route('thai.index') }}">จัดการกุรอาน</a>
    </li>
 
    <li class="nav-item">
      <a class="nav-link" href="{{ route('tafseers.index') }}">จัดการวิดีโอตัฟซีร</a>
    </li>
   
    
    <li class="nav-item">
      <a class="nav-link" href="{{ route('user.index') }}">จัดการผู้ใช้</a>
    </li>  
    <li class="nav-item">
      <a class="nav-link" href="{{ route('managenote') }}">จัดการโน้ต</a>
    </li> 
  
                  @endif
 
  </ul>
</nav>
</div>    



@section('content')
<br>

<div class="container">
    <div class="row justify-content-center">
 
        <div class="col-md-8">
            <div class="card">
             

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


<div class="row mt-2">
    <div class ="col-md-12">
    <!-- <h class="font-semibold text-xl text-gray-800 leading-tight">
    ยินดีต้องรับคุณ{{Auth::user()->name}}

        </h>   -->
    <center>
      <h2>โน้ตของคุณ</h2>
</center>
<!-- <a href="javascript:history.back()" class="btn btn-warning">กลับไปหน้าซูเราะห์</a> -->
          <a href ="{{ route('homeuser')}}" class ="btn btn-dark my-3"> Quran.th </a>
          <!-- <a href="javascript:history.back()" class="btn btn-primary">กลับ</a> -->
    </div>      
</div> 
<!-- 
@if($message = Session::get('success'))
    <div class ="alert alert-success">
        {{$message}}
</div>

@endif -->

<table class="table table-bordered">

 <tr>
    <th class="font-weight-bold" >ที่</th>
    <th class="font-weight-bold">หัวข้อ</th>
    <th class="font-weight-bold">คำอธิบาย</th>
    <th  class="font-weight-bold" >ชื่อผู้ใช้</th>
    <th  class="font-weight-bold" >Action</th>
    
 </tr>

 @foreach ($data as $key => $value)
    <tr>
        <td>{{ $data->firstItem()+$loop->index}} </td>
        <td>{{ $value->title }}</td>
        <td>{{ Str::limit($value->description, 100) }}</td>
        <td>{{$value->user->name}}</td>
        <td>
         <!-- <form action="{{ route('notes.destroy', $value->id) }}" method="post">
             <a href="{{ route('notes.show', $value->id) }}" class="btn btn-primary">ดู</a>
             <a href="{{ route('notes.edit', $value->id) }}" class="btn btn-secondary">แก้ไข</a>
             @csrf
             @method('DELETE')
             <button type="บันทึก" class ="btn btn-danger">ลบ</button> 
</form>  -->
        


          <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('notes.show', $value->id) }}">ดู</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('notes.edit', $value->id) }}">แก้ไข</a></li> {{-- Edit --}}
                        
                        <li>
                            <hr class="dropdown-divider">
                       
                        <li>
                            <form action="{{ route('notes.destroy', $value->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                              
                                <button type="submit" class="dropdown-item">ลบ</button>
                            </form>
                        </li>
                    </ul>
                </div>


        </td>
    </tr>    
 @endforeach

</table>   

{!! $data->links() !!}

@endsection