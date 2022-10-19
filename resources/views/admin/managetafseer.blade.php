@extends('layouts.admin')

@section('content')


<div class ="container">
  <table class="table table-hover table-bordered  ">
  
    <thead >
    <tr class="table">
        <th scope="col">No.</th>
        <th scope="col">Name</th>
        <th scope="col">Youtube ID</th>
        <th scope="col">Surah</th>
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
