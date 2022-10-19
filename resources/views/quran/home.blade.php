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


<div style = background-color:#A9A9A9; class=" row text-center ">
  @foreach($datasurahs as $datasurah)     
<div class="col-sm-3">
 <a href="{{ route('arabic', $datasurah) }}">
  <button style= "height: 90px; width:240px; 
  margin-top: 30px;
  margin-right: 10px;
  margin-left: 10px;
  margin-bottom: 10px;"  
  type="buttom" class="btn btn-outline-light" >
  <p class="arabic" >{{ $datasurah->surah_arab}}</p>
  <span >{{ $datasurah->th_name}}</span></button></a>
  </div>
 <br>
        @endforeach
 <br>
</div>
 @endsection
 <!DOCTYPE html 

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
startday = new Date();
clockStart = startday.getTime();
function initStopwatch()
{
 var myTime = new Date();
        var timeNow = myTime.getTime();  
        var timeDiff = timeNow - clockStart;
        this.diffSecs = timeDiff/1000;
        return(this.diffSecs);
}
function getSecs()
{
        var mySecs = initStopwatch();
        var mySecs1 = ""+mySecs;
        mySecs1= mySecs1.substring(0,mySecs1.indexOf(".")) + " วินาที";
        document.forms[0].timespent.value = mySecs1
        window.setTimeout('getSecs()',1000);
}
</script>
</head>
<body onLoad="window.setTimeout('getSecs()',1)">
<center>
<div style="font-size:18px;">โค้ดจับเวลา</div>
<br />
<form>
     คุณอยู่ในหน้านี้มานาน:  <input size=9 name=timespent>
</form>
</center>
</body>
</html>