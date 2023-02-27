@extends('enduser.shortnav')
@section('content')
<style>
      @font-face {
        font-family:'Uthmani' ;
        src: url('assets/font/UthmanicHafs1Ver09.otf')format('truetype');
      }
      .arabic{
         font-family: 'Uthmani', serif;
         font-size: 18px;
         font-weight: normal;
         direction: rtl;
         padding: 0 5px;
         margin: 0;
         float: right;
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
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    
        
     

      </style>
   
 
   <div class="surahh">
<div  class="grid ">
  @foreach($datasurahs as $datasurah)     
  <div class="col">
  <div class="list">
  <span class="surah-no">{{ $datasurah->id}}</span>
  <div class="info">
  <a href="{{ route('surah', $datasurah) }}">
    <div class="title">
  <span class="th" >{{ $datasurah->th_name}}</span>
  <span class="arabic" >{{ $datasurah->surah_arab}}</span>
  </div>
  <div class="subtitle">
  <span class="plase" >{{ $datasurah->type}}</span>
  <span class="ayah" > {{ $datasurah->whole_ayah}} </span>
  
  </div></a>
  </div>
  </div>
  </div>
 
    @endforeach
 
</div>
</div>
 @endsection