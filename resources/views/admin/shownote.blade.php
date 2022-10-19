@extends('layouts.adminmanageuser')


@section('content')
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
      
      <h2>แสดงโน๊ต</h2>
          <a href ="{{ route('managenote') }}" class ="btn btn-primary my-3">กลับ</a>
    </div>      
</div> 
@foreach ($data as $key => $value)
<div class="row">
    <div class ="card p-3"> 
      <div class ="card-title"> 
        <strong>หัวข้อ : </strong>
        {{ $value->title }}
      </div>

      <div class ="card-text">   
        <strong>คำอธิบาย : </strong>
          {{ $value->description}}
      </div>  
    </div>  
</div>  
@endforeach
@endsection