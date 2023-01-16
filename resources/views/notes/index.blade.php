@extends('layouts.app')

@section('content')

<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  }
  .closeshow{
  display: flex;
  float: left;
  padding: 3px  0 0 15px;
  color: #9e9ea7;
  color: #1266f1;
  }
  .closeshow a{
  color: #7f7f8b;
  }
  .noteshow{
  display: flex;
  float: left;
  padding: 0 10px;
  color: #7f7f8b;
  font-family: 'Uthmani', serif;
  
  }
  
  .actionn ul{
    display: flex;
    padding: 0;
  justify-content: flex-start;
  align-items: center;
    
    
  }
  .actionn ul li {
    position: relative;
    list-style: none;
    width: 30px;
    height: 30px;
    color: white;
  }
  .actionn ul li a{
    color: black;
  }
  .actionn ul li .bt{
    display: flex;
    border-style: none;
    
    
  }
  
</style>


<body style = background-color:#EFDEFF;>
  

<div class="container-fluid">
    <!--<div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header"> -->
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
      <a class="nav-link" href="{{ route('qurantafseers.index') }}">จัดการกุรอานตัฟซีร</a>
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

        <div class="closeshow">
        
        <a href ="javascript:history.back()"  > 
        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
        </a>
        </div> 
        
        <div class="noteshow">
      
        <h6>โน้ตของคุณ<h6>
        </div>
      


<!-- <a href="javascript:history.back()" class="btn btn-warning">กลับไปหน้าซูเราะห์</a> -->
<!--
          <a href ="{{ route('homeuser')}}" class ="btn btn-dark my-3"> Quran.th </a>
          <a href ="javascript:history.back()"  class ="btn btn-dark my-3"> กลับ </a>
-->
          <!-- <a href="javascript:history.back()" class="btn btn-primary">กลับ</a> -->

<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    </div>      
</div> 
<!-- 
@if($message = Session::get('success'))
    <div class ="alert alert-success">
        {{$message}}
</div>

@endif -->

<table class="table table-hover table-borderless  ">

 <tr>
    <th class="font-weight-bold" >ที่</th>
    <th class="font-weight-bold">หัวข้อ</th>
    <th class="font-weight-bold">คำอธิบาย</th>
    <!-- <th  class="font-weight-bold" >ชื่อผู้ใช้</th> -->
    <th  class="font-weight-bold" >Action</th>
    
 </tr>

 @foreach ($data as $key => $value)
    <tr>
       
        <td>{{ $loop->iteration }} </td> 
        <td>{{ $value->title }}</td>
        <td>{{ Str::limit($value->description, 100) }}</td>
        <!-- <td>{{$value->user->name}}</td> -->
        <td>
         <!-- <form action="{{ route('notes.destroy', $value->id) }}" method="post">
             <a href="{{ route('notes.show', $value->id) }}" class="btn btn-primary">ดู</a>
             <a href="{{ route('notes.edit', $value->id) }}" class="btn btn-secondary">แก้ไข</a>
             @csrf
             @method('DELETE')
             <button type="บันทึก" class ="btn btn-danger">ลบ</button> 
</form>  -->
        


 <!--          <div class="dropdown"> {{-- Dropdown --}}
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
                <ion-icon name="trash-outline"></ion-icon>
-->
              <div class="actionn">
                <ul >
                        <li class="active"><a href="{{ route('notes.show', $value->id) }}">
                        <span class="icon"><ion-icon name="eye-outline"></ion-icon></span>
                        </a></li> {{-- View --}}
                        
                        <li class="active"><a  href="{{ route('notes.edit', $value->id) }}">
                        <span class="icon"><ion-icon name="pencil-outline"></ion-icon></ion-icon></span>
                        
                        </a></li> {{-- Edit --}}
                            

                        <li class="active">
                            <form action="{{ route('notes.destroy', $value->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                              
                                <button type="submit" class="bt" ><ion-icon name="trash-outline"></ion-icon></button>
                            </form>
                        </li>
                    </ul>
                </div>
        </td>
    </tr>    
 @endforeach

</table>   




@endsection
</body>