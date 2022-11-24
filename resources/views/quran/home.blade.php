@extends('quran.nav')
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


<div style = background-color:#9be2cd; class=" row text-center ">
  @foreach($datasurahs as $datasurah)     
<div class="col-sm-4">
 <a href="{{ route('arabic', $datasurah) }}">
  <button style= "height: 90px; width:240px; 
  margin-top: 16px;
  margin-right: 19px;
  margin-left: 19px;
  margin-bottom: 16px;"  
  type="buttom" class="btn btn-outline-light" >
  <p class="arabic" >{{ $datasurah->surah_arab}}</p>
  <span >{{ $datasurah->th_name}}</span></button></a>
  </div>
 <br>
        @endforeach
 <br>
</div>
 @endsection
