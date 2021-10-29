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
      <h2>โน้ตของคุณ</h2>
</center>
          <a href ="{{ route('posts.create')}}" class ="btn btn-dark my-3"> สร้างโน้ตใหม่ </a>
          <a href ="{{ route('homeuser')}}" class ="btn btn-dark my-3"> Quran.th </a>
    </div>      
</div> 

@if($message = Session::get('success'))
    <div class ="alert alert-success">
        {{$message}}
</div>

@endif

<table class="table table-bordered">

 <tr>
    <th>ที่</th>
    <th>หัวข้อ</th>
    <th>คำอธิบาย</th>
    <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ Str::limit($value->description, 100) }}</td>
        <td>
          <form action="{{ route('posts.destroy', $value->id) }}" method="post">
             <a href="{{ route('posts.show', $value->id) }}" class="btn btn-primary">ดู</a>
             <a href="{{ route('posts.edit', $value->id) }}" class="btn btn-secondary">แก้ไข</a>
             @csrf
             @method('DELETE')
             <button type="บันทึก" class ="btn btn-danger">ลบ</button> 
          </form>
        </td>
    </tr>    
 @endforeach

</table>   

{!! $data->links() !!}

@endsection