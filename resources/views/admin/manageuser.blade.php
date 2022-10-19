@extends('layouts.admin')

@section('content')

<div class ="container">
  <table class="table table-hover table-bordered  ">
  
    <thead >
    <tr class="table">
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">E-mail</th>
     
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
                      
            
                      <a href="{{ route('manageuser') }}" class="btn btn-warning">Edit</a>
                      <a href="{{ route('manageuser') }}" class="btn btn-primary">See</a>
                      <a href="{{ route('manageuser') }}" class="btn btn-danger">Delete</a>
                
                                 </td>
  </tr> 
  @endforeach
  </tbody> 
  </table>


</div>

@endsection
