@extends('enduser.shortnav')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Search with pagination</title>
    <link rel="stylesheet" href="{{ asset('bootstrap-3.1.1/css/bootstrap.min.css')}}"> 
</head>

<style>
  * {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}
  .table{
    font-family: 'Uthmani', serif;
  }
  .tabtop{
    background-image: linear-gradient(to right, #abbaab 0%, #ffffff 51%, #abbaab 100%);  
  }
  .table-hover tbody tr:hover td {
    background-color: #85FFBD;
    
}
.pagination{
  display: flex;
}
</style>
<br>
<br>


<div class ="container">
  <table class="table table-hover   ">
  
    <thead >
    <tr class="tabtop">
        <th scope="col">ลำดับที่</th>
        <th scope="col">ชื่อซูเราะห์</th>
        <th scope="col">ชื่อภาษาอาหรับ</th>
        <th scope="col">ประทานที่</th>
        <th scope="col">จำนวนอายะห์</th>
     </tr> 
     <thead>
    <tbody>
 
    @foreach($datasurahs as $datasurah)  
    <tr >
        <td>{{ $datasurah->id}}</td>
        <td>
       
        <a href ="{{ route('tafseer_detailuser', $datasurah) }}" class="link-dark" >
          {{ $datasurah->th_name}}</a></td>
        <td>({{ $datasurah->surah_arab}})</td>
        <td>{{ $datasurah->type}}</td>
        <td>{{ $datasurah->whole_ayah}}</td>
    </tr> 
    @endforeach
    </tbody> 
    </table>
    <div class="pagination justify-content-center">
    {{$datasurahs->links()}}
    </div>
  </div>
@endsection