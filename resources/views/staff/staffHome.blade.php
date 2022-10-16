@extends('layouts.staffmanage')

@section('content')

<div class ="container">
  <table class="table table-hover table-bordered border-success table-striped">
  
    <thead >
    <tr class="table-success">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อซูเราะห์</th>
        <th scope="col">ชื่อภาษาอาหรับ</th>
        <th scope="col">ประทานที่</th>
        <th scope="col">จำนวนอายะห์</th>
     </tr> 
  
   <thead>
  <tbody>

  @foreach($datasurahs as $datasurah)  
  <tr class="table-success ">
      <td>{{ $datasurah->id}}</td>
      <td>
     
        <a href ="{{ route('staffmanagequran',$datasurah) }}" class="link-dark" >
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



