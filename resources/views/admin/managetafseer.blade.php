@extends('layouts.admin')

@section('content')


<div class ="container">
  <table class="table table-hover table-bordered  ">
  
    <thead >
    <tr class="table">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">ไอดียูทูป</th>
        <th scope="col">ซูเราะห์</th>
        <th scope="col">action</th>
      
     </tr> 
  
   <thead>
  <tbody>

  @foreach($tafseer as $tafseers )  
  <tr class="table ">
      <td>{{ $tafseers->id}}</td>
      <td width=50%> {{ $tafseers->name}}</a></td>
      <td>{{ $tafseers->youtubeId}}</td>
      <td>{{ $tafseers->data->th_name}}</td>
      <td >
                      
            
                      <a href="{{ route('manageuser') }}" class="btn btn-warning">แก้ไข</a>
                      <a href="{{ route('manageuser') }}" class="btn btn-primary">ดู</a>
                      <a href="{{ route('manageuser') }}" class="btn btn-danger">ลบ</a>
                
                                 </td>
  </tr> 
  @endforeach
  </tbody> 
  </table>


</div>

@endsection
