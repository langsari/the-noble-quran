@extends('notes.layout')


@section('content')
<style>
  .bshow{
  display: flex;
  float: left;
  padding: 0;
  color: #9e9ea7;
  color: #1266f1;
  }
  .bshow a{
  color: #7f7f8b;
  }
  .cshow{
  display: flex;
  float: right;
  padding: 0;
  color: #9e9ea7;
  color: #1266f1;
  }
  .cshow a{
  color: #7f7f8b;
  }
  .noteshow{
  display: flex;
  float: left;
  padding: 0 10px;
  color: #7f7f8b;
  font-family: 'Uthmani', serif;
  
  }
  
  
  
</style>
<body style = background-color:#B5E2B6;>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
              

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


<div class="row mt-2">
    <div class ="col-md-12">
    <div class="bshow">
        <a href ="javascript:history.back()"  > 
        <span class="icon"><ion-icon name="arrow-back-outline"></ion-icon></span>
        </a>
        </div> 
        
        <div class="noteshow">
      
        <h6>แก้ไข<h6>
        </div>
      
        <div class="cshow">
        <a href ="{{ route('notes.index') }}"  > 
        <span class="icon"><ion-icon name="close-outline"></ion-icon></span>
        </a>
        </div> 
<!--
      <h2>แก้ไข1</h2>
          <a href ="{{ route('notes.index') }}" class ="btn btn-success my-3">กลับ</a> -->
    </div>      
</div> 
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<br>
@if ($errors->any())
 <div class="alert alert-danger">
     <strong>อุปส์</strong>
     มีบางอย่างผิดพลาด <br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<form action="{{ route('notes.update', $note->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
    <div class ="col-md-12">
        <div class="form-group">
            <strong>เรื่อง</strong>
            <input type="text" name="title" value="{{ $note->title }}" class="form-control" placeholder="ใส่ชื่อเรื่อง">
        </div>
    </div>   

    <div class ="col-md-12">
        <div class="form-group">
            <strong>คำอธิบาย</strong>
            <textarea class="form-control" style="height: 150px" name="description" placeholder="ใส่คำอธิบาย">{{ $note->description }}</textarea>
        </div>
    </div>

    <div class ="col-md-12 text-right">
     <button type="submit" class ="btn btn-success my-3">แก้ไข</button> 
    </div>
</div>
</form>

@endsection
<body>