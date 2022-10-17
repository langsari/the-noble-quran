@extends('layouts.adminmanageuser')

@section('content')

<h class="h4 text-gray-900 mb-4">เเก้ไขข้อมูลผู้ใช้งาน</h>
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

<form action="{{ route('user.update', $user->id) }}" method="post">

    @csrf
    @method('put')
    <strong>ที่ : </strong>
    <input type="text" name="id" class="form-control mb-3" placeholder="ที่" value="{{ $user->id }}"/>
    <strong>ชื่อ : </strong>
    <input type="text" name="name" class="form-control mb-3" placeholder="ชื่อ" value="{{ $user->name }}"/>
    
    <strong>ดีกรี : </strong>
    <input type="number" name="is_admin" class="form-control mb-3" placeholder="ดีกรี" value="{{ $user->is_admin }}"/>
    
    <strong>อีเมลล์ : </strong>
    <input type="text" name="email" class="form-control mb-3" placeholder="อีเมลล์" value="{{ $user->email }}"/>
    <strong>รหัสผ่าน : </strong>
    <textarea class="form-control mb-3" name="password" rows="4" placeholder="รหัสผ่าน">{{ $user->password}}</textarea>
    <a href ="{{ route('user.index') }}" class ="btn btn-success my-0"> กลับ </a>
    <button class="btn btn-primary float-end px-5" type="submit">บันทึก</button>
</form>

@endsection 