@extends('mqurans.layout')


@section('content')

<div class="row mt-5">
    <div class ="col-md-12">
      <h2>Crud Index</h2>
          <a href ="{{ route('mqurans.create') }}" class ="btn btn-success my-3"> Create new </a>
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

    <th>หัวข้อ</th>
    <th>คำอธิบาย</th>
    <th width="280px">Action</th>
 </tr>

 @foreach ($data as $key => $value)
    <tr>
    <tr class="table-success ">
        <td>{{ $data->id}}</td>
      
        <td>{{ $data->surah_arab}})</td>
        <td>{{ $data->type}}</td>
        <td>{{ $data->whole_ayah}}</td>
    </tr> 
        <td>
          <form action="{{ route('mqurans.destroy', $value->id) }}" method="post">
             <a href="{{ route('mqurans.show', $value->id) }}" class="btn btn-primary">ดู</a>
             <a href="{{ route('mqurans.edit', $value->id) }}" class="btn btn-secondary">แก้ไข</a>
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