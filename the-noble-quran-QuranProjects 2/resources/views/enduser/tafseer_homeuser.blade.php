@extends('enduser.shortnav')
@section('content')
<br>
<br>


<div class ="container">
  <table class="table table-hover table-bordered border-success table-striped">
  
    <thead >
    <tr class="table-success">
        <th scope="col">No.</th>
        <th scope="col">Name of surah</th>
        <th scope="col">Arabic name</th>
        <th scope="col">Period</th>
        <th scope="col">Verses</th>
     </tr> 
     <thead>
    <tbody>
 
    @foreach($datasurahs as $datasurah)  
    <tr class="table-success ">
        <td>{{ $datasurah->id}}</td>
        <td>
       
          <a href ="{{ route('tafseer_detailuser', $datasurah) }}" class="link-dark" >
          {{ $datasurah->th_name}}</a></td>
        <td>{{ $datasurah->surah_arab}})</td>
        <td>{{ $datasurah->type}}</td>
        <td>{{ $datasurah->whole_ayah}}</td>
    </tr> 
    @endforeach
    </tbody> 
    </table>
    {{$datasurahs->links()}}
 
  </div>
@endsection