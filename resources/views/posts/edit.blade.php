@extends('posts.layout')

@section('content')

<div class="row mt-5">
    <div class ="col-md-12">
      <h2>แก้ไข</h2>
          <a href ="{{ route('posts.index') }}" class ="btn btn-success my-3">กลับ</a>
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

<form action="{{ route('posts.update', $post->id) }}" method="post">
    @csrf
    @method('PUT')

    <div class="row">
    <div class ="col-md-12">
        <div class="form-group">
            <strong>เรื่อง : </strong>
            <input type="text" name="title" value="{{ $post->title }}" class="form-control" placeholder="ใส่ชื่อเรื่อง">
        </div>
    </div>   

    <div class ="col-md-12">
        <div class="form-group">
            <strong>คำอธิบาย : </strong>
            <textarea class="form-control" style="height: 150px" name="description" placeholder="ใส่คำอธิบาย">{{ $post->description }}</textarea>
        </div>
    </div>

    <div class ="col-md-12">
     <button type="submit" class ="btn btn-success my-3">แก้ไข</button> 
   </div>
</div>
</form>

@endsection