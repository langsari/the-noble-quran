@extends('posts.layout')

@section('content')

<div class="row mt-5">
    <div class ="col-md-12">
      <h2>แสดงโน๊ต</h2>
          <a href ="{{ route('posts.index') }}" class ="btn btn-primary my-3">กลับ</a>
    </div>      
</div> 

<div class="row">
    <div class ="card p-3"> 
      <div class ="card-title"> 
        <strong>หัวข้อ : </strong>
          {{ $post->title}}
      </div>

      <div class ="card-text">   
        <strong>คำอธิบาย : </strong>
          {{ $post->description}}
      </div>  
    </div>  
</div>  
@endsection