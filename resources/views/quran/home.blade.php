@extends('quran.navbar')
@section('content')

   
 
<div style = background-color:#9be2cd; class=" row text-center ">

      @foreach($datasurahs as $datasurah)     
<div class="col-sm">
 <a href="{{ route('arabic', $datasurah) }}">
  <button style= "height: 120px; width:320px; 
  margin-top: 30px;
  margin-right: 10px;
  margin-left: 10px;
  margin-bottom: 10px;"  
  type="buttom" class="btn btn-outline-light" >
<span>{{ $datasurah->th_name}}</span><h4>({{ $datasurah->surah_arab}})<h4></button></a>
</div>
<br>
        @endforeach
<br>
</div>



        

    @endsection
