@extends('layouts.app')

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
        <center>
      <h2>ยินดีต้อนรับเข้าสู่ Quran.th</h2>
          <a href ="{{ route('posts.create')}}" class ="btn btn-dark my-3"> สร้างโน้ตใหม่ </a>
          <a href ="{{ route('homeuser')}}" class ="btn btn-dark my-3"> Quran.th </a>
</center>
    </div>      
    <img src="adminassets/img/quran2.png">
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
