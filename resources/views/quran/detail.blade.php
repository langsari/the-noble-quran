@extends('quran.nav')
@section('content')
<!--<h3 class="text-center text-dark">{{$arabics->th_name}}</h3> -->


 <div style = background-color:#00000; class="search-area">
    <div class="container">
      <br>

    <a href="{{ route('tafseer_detail',$datasurah) }}" class="link-dark" >ตัฟซีร ซูเราะห์ {{$arabics->th_name}} </a>

 
    <br>
  <ul class="list-group list-group-horizontal">
           <li class="list-group-item  list-group-item-secondary">	<select id="surahlist" class="surah-list"><option  value=1>1. Al-Fathiha</option></select> </li>
           <li class="list-group-item  list-group-item-secondary"> <select id="ayahlist" class="ayah-list"><option  value="0" rel="0" >0-0</option><option  value="1" rel="3" >1-3</option><option  value="4" rel="5" >4-5</option><option  value="6" rel="6" >6-6</option><option  value="7" rel="8" >7-8</option><option  value="9" rel="10" >9-10</option><option  value="11" rel="13" >11-13</option><option  value="14" rel="17" >14-17</option><option  value="18" rel="19" >18-19</option><option  value="20" rel="20" >20-20</option><option  value="21" rel="22" >21-22</option><option  value="23" rel="24" >23-24</option><option  value="25" rel="25" >25-25</option><option  value="26" rel="27" >26-27</option><option  value="28" rel="29" >28-29</option><option  value="30" rel="31" >30-31</option><option  value="32" rel="34" >32-34</option><option  value="35" rel="35" >35-35</option><option  value="36" rel="36" >36-36</option><option  value="37" rel="37" >37-37</option><option  value="38" rel="38" >38-38</option><option  value="39" rel="40" >39-40</option><option  value="41" rel="44" >41-44</option><option  value="45" rel="48" >45-48</option><option  value="49" rel="49" >49-49</option><option  value="50" rel="50" >50-50</option><option  value="51" rel="51" >51-51</option><option  value="52" rel="52" >52-52</option><option  value="53" rel="54" >53-54</option><option  value="55" rel="55" >55-55</option><option  value="56" rel="56" >56-56</option><option  value="57" rel="58" >57-58</option><option  value="59" rel="62" >59-62</option><option  value="63" rel="68" >63-68</option><option  value="69" rel="69" >69-69</option><option  value="70" rel="71" >70-71</option><option  selected  value="72" rel="73" >72-73</option></select>   </li>
  </ul>
         <p class="arabic text-center ">{{$arabics->th_name}}</p>
         <br> 
         <div class="col-sm-3">
                <div class="form-group row">
                </div>
                </div>
                @foreach($arabics->arabic as $arabic )
            <p class="arabic">{{$arabic->text}}<span class="arabic_number"></span></p>
            <p class="latin">[{{$arabic->thais->ayat}}]{{$arabic->thais->text}}</p>
            <audio controls >
                <source src="/mp3/{{$arabic->thais->audio}}" type="audio/mpeg">
            </audio>
            <br>
                <!-- Button trigger modal -->
<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#staticBackdrop{{$arabic['arabic_id']}}">
 ตัฟซีร
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop{{$arabic['arabic_id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$arabics->th_name}} อายะห์ที่ {{$arabic->thais->ayat}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>{{$arabic->thais->tafseer}}</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">ปิด</button>
    
      </div>
    </div>
  </div>
</div>
<br>


<hr>
              @endforeach </div>

@endsection