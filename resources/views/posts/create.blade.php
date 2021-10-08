@extends('posts.layout')


@section('content')

<div class="row mt-5">
    <div class ="col-md-12">
      <h2>เพิ่ม</h2>
          <a href ="{{ route('posts.index') }}" class ="btn btn-success my-3"> กลับ </a>
    </div>      
</div> 

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

<form action="{{ route('posts.store') }}" method="post">
    @csrf

<div class="row">
    <div class ="col-md-12">
        <div class="form-group">
            <strong>เรื่อง : </strong>
            <input type="text" name="title" class="form-control" placeholder="ใส่ชื่อเรื่อง">
        </div>
    </div>   


    <div class ="col-md-12">
        <div class="form-group">
            <strong>คำอธิบาย : </strong>
            <textarea class="form-control" style="height: 150px" name="description" placeholder="ใส่คำอธิบาย"></textarea>
        </div>
    </div>

  <div class ="col-md-12">
     <button type="submit" class ="btn btn-success my-3">บันทึก</button> 
  </div>
</div>
</form>

@endsection


