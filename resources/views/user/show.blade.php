@extends('layouts.adminmanageuser')

@section('content')
<h1 class="h4 text-gray-900 mb-4">ข้อมูลผู้ใช้งาน</h1>
    <hr/>

    <div class="bg-dark text-white rounded p-3">
    <div class ="card-text">   
        <strong>ที่ : </strong>
        {{ $user->id }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>ชื่อ : </strong>
        {{ $user->name }}
      </div> 
      <br>
      <div class ="card-text">   
        <strong>ดีกรี : </strong>
        {{ $user->is_admin }}
      </div> 
      <br>
        <div class ="card-text">   
        <strong>อีเมลล์ : </strong>
        {{ $user->email }}
      </div>  
      <br>
      <!-- <div class ="card-text">   
        <strong>รหัสผ่าน : </strong>
        {{ $user->password }}
      </div>    
      <br> -->
        <a href ="{{ route('user.index') }}" class ="btn btn-success my-0"> กลับ </a>
    </div>

@endsection