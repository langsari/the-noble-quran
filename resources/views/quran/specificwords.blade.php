@extends('quran.navbar')
@section('content')

<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>
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
        .cautions2 {
        
        font-size: 13px;
        font-weight: normal;
        direction: ltr;
        padding: 0 5px;
        margin: 0;
        color: blue;

    }
    .t {
  background-color: white;
  color: black;
  font-family:  serif;
        font-size: 15px;
        font-weight: normal;
        direction: rtl;
        padding: 0;
        margin: 0;
}
    @font-face {
    font-family: quran-font;
    font-style: normal;
    font-weight: 400;
    src: url('assets/font/AmiriQuranColored.woff') format('truetype');
  }
  
  .quran-font {
    font-family: quran-font;
    font-size: 26px;
    color: black;
  }
  .quran-font-intro  p{
     font-family: quran-font;
     direction: rtl;
     font-size: 26px;
     line-height: 200%;
     color: black;
   }
   .highlight{ 
  background:black; 
  padding:1px; 
  border:#00CC00 dotted 1px; 
}
        
     

      </style>
       <br>
    <br>
    <div style = background-color:white; class="search-area">
 <div class="row">
    <div class="col-md-8 mx-auto">
<br>
<br>

<ul class="list-group bg-white list-group-horizontal  ">
 
<!-- detail The Quran -->
  <h4 class="arabic text-center ">[بلايباي]ก้ดเิหก่้</h4>
         <br> 
         
         <div class="col-sm-3">
         <div class="form-group row">
        </div>
        </div>
       يليقلق
                
        <div class="quran-font-intro ">
        <p>
        يلبي
        </p>
      
       </div>
       <!--<p class="t">{{$arabic->transliteration}}</p>-->
       <p class="t">{{$arabic->thais->Text}}</p>
       <!-- checked ststus before display on screen if user CRUD Quran -->
       @if($arabic->thais->status == 'อนุมัติ') 
      <p class="latin">[{{$arabic->thais->ayat}}]{{$arabic->thais->Text}}</p>
       @endif
      <br>
      <audio controls >
      <source src="/mp3/{{$arabic->thais->audio}}" type="audio/mpeg">
      </audio>
      <br>
          