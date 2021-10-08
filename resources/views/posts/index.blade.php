@extends('posts.layout')


@section('content')

<div class="row mt-5">
    <div class ="col-md-12">
      <h2>Crud Index</h2>
          <a href ="{{ route('posts.create') }}" class ="btn btn-success my-3"> Create new </a>
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