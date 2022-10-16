@extends('layouts.adminmanageuser')

@section('content')

<h class="h4 text-gray-900 mb-4">เพิ่มผู้ใช้งาน</h>
<hr/>



@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('user.store') }}" method="post">
    @csrf
    <!-- <input type="text" name="id" class="form-control mb-3" placeholder="ที่"/> -->
    <input type="text" name="name" class="form-control mb-3" placeholder="ชื่อ"/>
    <input type="number" name="is_admin" class="form-control mb-3" placeholder="ดีกรี"/>
    <input type="text" name="email" class="form-control mb-3" placeholder="อีเมลล์"/>
    <textarea class="form-control mb-3" name="password" rows="4" placeholder="รหัสผ่าน"></textarea>
    
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
    <a href ="{{ route('user.index') }}" class ="btn btn-success my-0"> กลับ </a>
</form>

@endsection