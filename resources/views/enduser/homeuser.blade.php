@extends('enduser.shortnav')
@section('content')
<style>
      @font-face {
        font-family:'Uthmani' ;
        src: url('assets/font/UthmanicHafs1Ver09.otf')format('truetype');
      }
     .arabic{
         font-family: 'Uthmani', serif;
         font-size: 23px;
         font-weight: normal;
         direction: rtl;
         padding: 0 5px;
         margin: 0;
     }
     .latin{
        font-family:  serif;
        font-size: 17px;
        font-weight: normal;
        direction: ltr;
        padding: 0;
        margin: 0;
     }
      .arabic_number {
        font-size: 28px;
        font-weight: normal;
      }
        .cautions {
        
        font-size: 13px;
        font-weight: normal;
        direction: ltr;
        padding: 0 5px;
        margin: 0;
        color: red;

    }
        
     

      </style>
   
 
<div style = "background-color:#749F82; padding-bottom: 30px;" class=" row text-center "> <!-- หน้าชื่อซูเราะห์ที่เป็น grid -->

      @foreach($datasurahs as $datasurah)     
<div class="col-sm-3">
 <a href="{{ route('surah', $datasurah) }}">
  <button style= "height: 90px; width:240px; 
  margin-top: 30px;
  margin-right: 10px;
  margin-left: 10px;
  margin-bottom: 10px;"  
  type="buttom" class="btn btn-outline-light" >
  <p class="arabic" >{{ $datasurah->surah_arab}}</p><span class="thai" >{{ $datasurah->th_name}}</span></button></a>
</div>
<br>
        @endforeach
<br>
</div>



        

    @endsection