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
      
        <h6>โน้ตของคุณ<h6>
        </div>
      
        <div class="cshow">
        <a href ="{{ route('notes.index') }}"  > 
        <span class="icon"><ion-icon name="close-outline"></ion-icon></span>
        </a>
        </div> 
      <!--
        <h6>แสดงโน๊ต</h6>
          <a href ="{{ route('notes.index') }}" class ="btn btn-primary my-3">กลับ</a>
-->
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    </div>      
</div> 
<br>
<div class="row">
    <div class ="card p-3"> 
      <div class ="card-title"> 
        <strong>หัวข้อ : </strong>
          {{ $note->title}}
      </div>

      <div class ="card-text">   
        <strong>คำอธิบาย : </strong>
          {{ $note->description}}
      </div>  
    </div>  
</div>  
@endsection