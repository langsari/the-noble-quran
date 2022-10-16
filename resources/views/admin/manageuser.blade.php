@extends('layouts.admin')

@section('content')

<div class ="container">
  <table class="table table-hover table-bordered  ">
  
    <thead >
    <tr class="table">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อ</th>
        <th scope="col">อีเมลล์</th>
     
        <th scope="col">action</th>
      
     </tr> 
  
   <thead>
  <tbody>

  @foreach($user as $user)  
  <tr class="table ">
      <td>{{ $user->id}}</td>
      <td> {{ $user->name}}</a></td>
      <td>{{ $user->email}}</td>
     
      <td>
                      
            
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
