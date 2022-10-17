@extends('quran.nav')
@section('content')

<br>
<br>


<div class ="container">
  <table class="table table-hover table-bordered border-success table-striped">
  
    <thead >
    <tr class="table-success">
        <th scope="col">At</th>
        <th scope="col">Surah Name</th>
        <th scope="col">Arabic Name</th>
        <th scope="col">Source</th>
        <th scope="col">Number of Ayah</th>
     </tr> 
     <thead>
    <tbody>
 
    @foreach($datasurahs as $datasurah)  
    <tr class="table-success ">
        <td>{{ $datasurah->id}}</td>
        <td>
       
          <a href ="{{ route('tafseer_detail', $datasurah) }}" class="link-dark" >
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