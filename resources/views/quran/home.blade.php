@extends('quran.nav')
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
    .surahh{
      max-width: 80rem;
    -webkit-margin-before: 0;
    margin-block-start: 0;
    -webkit-margin-after: 0;
    margin-block-end: 0;
    -webkit-margin-start: auto;
    margin-inline-start: auto;
    -webkit-margin-end: auto;
    margin-inline-end: auto;
    --flow-side-spacing: var(--spacing-small);
    -webkit-padding-start: var(--flow-side-spacing);
    padding-inline-start: var(--flow-side-spacing);
    -webkit-padding-end: var(--flow-side-spacing);
    padding-inline-end: var(--flow-side-spacing);
    }
    .grid{
      display: grid;
      padding: 16px 200px;
      background-color:while;
      grid-gap: 10px;
      grid-template-columns: repeat(3, 1fr);
      

    }
    .col{
      position: relative;
      width: 100%;
      min-height: 0;
      padding-right: 0;
      padding-left: 0;
      background-color: while;
      cursor: pointer;
      color: initial;
      border: 1px solid #91740c3d;
      border-radius: 5px;
      
    }
    .list{
    height: 100%;
    
    display: flex;
    align-items: center;
    padding: 10px 18px;
    }
    .surah-no{
      font-size: 17px;
      justify-content: start;
      color: #48b749;
      font-weight: 600;
      padding-right: 20px;
      margin-top: -25px;
    }
    .info{
    flex-grow: 1;
    overflow: hidden;
    white-space: nowrap;
    display: block;
    min-width: 0;
    margin-right: 8px;
    
    }
    .title{
      display: block;
      font-size: 17px;
      color: #000;
  
    }
    .ayah{
      font-family: 'Uthmani', serif;
      font-weight: normal;
      font-size: 15px;
      direction: rtl;
      padding: 0;
      margin: 0 5px 0px 20px;
      float: right;
    }
    .subtitle{
      display: block;
      font-size: 13px;
      color: #bdbdbd;
      margin-top: 2px;
      font-weight: 500;
      letter-spacing: .3px
    }
    .col:hover{
      background-color: #e4cb6821;
      box-shadow: 0 4px 21px -3px rgba(51,51,51,.15);
      border-color: #48b749;
    }
    .info a{
      text-decoration: none;
    
    }
    
  
</style>
<div class="surahh">
<div  class="grid ">
  @foreach($datasurahs as $datasurah)     
  <div class="col">
  <div class="list">
  <span class="surah-no">{{ $datasurah->id}}</span>
  <div class="info">
  <a href="{{ route('arabic', $datasurah) }}">
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





 