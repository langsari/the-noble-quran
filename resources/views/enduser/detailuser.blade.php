@extends('enduser.navuser')
@section('content')

<link rel="stylesheet" href=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
    </script>
    <script src=
"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">
    </script>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@300&display=swap" rel="stylesheet">

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
        .t {
  background-color: #F6F2D4;
  color: #2C3333;
  font-family: 'Mitr', sans-serif;
        font-size: 15px;
        font-weight: normal;
        direction: rtl;
        padding: 0;
        margin: 0;
}
.select {
  background-color: black;
  color: white;
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
    color: #FFFFFF;
  }
  .quran-font-intro  p{
     font-family: quran-font;
     direction: rtl;
     font-size: 26px;
     line-height: 200%;
     color: #00000;
   }
.navigation {
    position: absolute;
    right: 12px;
    top: 24px;
}
.col-md-3{
    background-color: #F6F2D4;
    font-family: 'Mitr', serif;
  }
button{
    font-family: 'Mitr', serif;
}   
.bs-example{
  font-family: 'Mitr', serif;
}
     

      </style>
       <br>
    <br>
 <div style = background-color:#F6F2D4; class="search-area">
 <div class="row">
    <div class="col-md-8 mx-auto">
  
 <!--  vdo Tafseer link all
    <a href="{{ route('tafseer_detail',$datasurah) }}" class="link-dark" >วิดีโอตัฟซีร ซูเราะห์ {{$arabics->th_name}} </a>
    -->
  
    <!-- popup vdo
<br>
<br>
    <div class="bs-example">
    <!-- Button HTML (to Trigger Modal) 
    <a href="#myModal" class="btn btn-secondary" data-toggle="modal">วิดีโอตัฟซีร</a>
    
    <!-- Modal HTML 
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                
                    <h5 class="modal-title">วิดีโอ</h5>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                
                  <div class="embed-responsive embed-responsive-16by9">
                  @foreach($datasurah->tafseer as $tafseer )
                    <iframe id="cartoonVideo" class="embed-responsive-item" width="560" height="315" src="//www.youtube.com/embed/{{$tafseer->youtubeId}}" allowfullscreen></iframe>
                  @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>     
    <script>
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
    
    /* Assign the initially stored url back to the iframe src
    attribute when modal is displayed again */
    $("#myModal").on('show.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
});
</script>
-->

<!-- dropdown (causes_cat)
<br>
<div class="container mt-4">
        <div class="row">
         <div class="col-md-4">
             
                <div class="form-s2">
                    <div>
                        <select class="form-control formselect required "  placeholder="Select Category"
                            id="sub_category_name">
                            <option value="0" disabled selected> เลือกซูเราะห์*</option>
                            @foreach($datas as $categories)
                            <option  value="{{ $categories->id }}">
                                {{ ucfirst($categories->th_name) }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
          
                <select class="form-control formselect required" placeholder="Select Sub Category" id="sub_category"
                    >
                </select>
            </div>

        </div>
        <script src="http://code.jquery.com/jquery-3.4.1.js"></script>
        
    <script>
                $(document).ready(function () {
                $('#sub_category_name').on('change', function () {
                let id = $(this).val();
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>Processing...</option>`);
                $.ajax({
                type: 'GET',
                url: 'GetSubCatAgainstMainCatEdit/' + id,
                success: function (response) {
                var response = JSON.parse(response);
                console.log(response);   
                $('#sub_category').empty();
                $('#sub_category').append(`<option value="0" disabled selected>อายะห์</option>`);
                response.forEach(element => {
                    $('#sub_category').append(`<option value="${element['datasurah_id']}">${element['ayat']}</option>`);
                    });
                }
            });
        });
    });
    </script>
 
    
    -->


<br>

 

  <ul class="list-group bg-white list-group-horizontal  ">



<!-- read -->
<!-- Button trigger modal -->
 
<button type="button" class="btn btn-dark " data-toggle="modal" data-target="#myModal">
  โหมดอ่านอัลกุรอาน
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$arabics->surah_arab}}</h4>
      </div>
      <div class="modal-body">
       

      <div class="quran-font-intro ">
        <p>
        @foreach($arabics->arabic as $arabic ) 
      {{$arabic->text}} 
       [{{$arabic->thais->ayat}}]
      @endforeach</p>
      </div>
    
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ปิด</button>
       
      </div>
    </div>
  </div>
</div>

<!-- read -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark " data-toggle="modal" data-target="#myModal2">
  ตัฟซีรอัลกุรอาน
</button>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        @foreach($tafseers->qurantafseer as $tafseer ) 
        @if($tafseer->status == 'อนุมัติ') 
<h4 class="modal-title" id="myModalLabel2">{{$tafseer->name}}</h4>
      </div>
      <div class="modal-body">
       

   
        <p>
       
      {{$tafseer->qurantafseer}} 
     
      </p>
    <hr>
    <div class ="card-text">   
        <strong>แปลโดย : </strong>
        {{ $tafseer->resource }}
      </div> 
      @endif
      @endforeach
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ปิด</button>
       
      </div>
    </div>
  </div>
</div>

     <!--VDO Tafseer -->
  



  <div class="bs-example">
            <a href="#Geeks2"
               class="btn  btn-dark"
               data-toggle="modal">ดูวิดีโอตัฟซีรอัลกุรอาน</a>
 
            <div id="Geeks2" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                    <h4 class="modal-title">ตัฟซีรซูเราะห์{{$arabics->th_name}}</h4>
                        </div>
                        <div class="modal-body">
                        @foreach($datasurah->tafseer as $tafseer )
                        <p>{{$tafseer->name}}</p>
                            <iframe id="Geeks3" width="450" height="350"
                           src="https://www.youtube.com/embed/{{$tafseer->youtubeId}}"
                            frameborder="0" allowfullscreen>
                            </iframe>
                            <br>
                            <br>
                          
                            
                            @endforeach
                        </div>

                        <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ปิด</button>
       
      </div>
                    </div>
                </div>
          </div>
      </div>

      <script>
        $(document).ready(function() {
            var url = $("#Geeks3").attr('src');
            $("#Geeks2").on('hide.bs.modal', function() {
                $("#Geeks3").attr('src', '');
            });
            $("#Geeks2").on('show.bs.modal', function() {
                $("#Geeks3").attr('src', url);
            });
        });
    </script>


<!-- dropdown : can not link
           <li class="list-group-item bg-dark list-group-item-secondary">	<select id="surahlist" class="surah-list bg-dark">  @foreach($datas as $data) <option  value={{$data->id}}>
    <li><a href="{{ route('arabic', $data) }}">{{$data->th_name}}</a></li>
    @endforeach</option></select> </li>

    <select id="list" onchange="getSelectValue();">
    @foreach($datas as $data)
            <option value="{{ route('arabic', $data) }}">{{$data->th_name}}</option>
            @endforeach
        </select>
    <script>
        
        function getSelectValue()
        {
            var selectedValue = document.getElementById("list").value;
            console.log(selectedValue);
        }
        getSelectValue();

    </script> -->
   

    <!-- dropdown : can link-->
    <div class="col-md-3 ">
             
             <div class="form-s2 ">
                 <div>
   
    <select class="form-control "  name="forma" onchange="location = this.options[this.selectedIndex].value;" id="surah_list">
    <option value="#"  style="color:white bg-black" >ซูเราะห์</option>
    @foreach($datas as $data)
    <option value="{{ route('surah', $data) }}" title="{{$data->th_name}}">
{{$data->th_name}} [{{$data->whole_ayah}}]</option>@endforeach </select>
      
    </div>
    </div>
    </div>

    <div class ="col-md-3 ">
    <select class="form-control  " name="menu1" id="{{$data->id}}">
    <option value="#" class="select">อายะห์</option>
    @foreach($arabics->arabic as $arabic )  
   <option value="{{$arabic->thais->ayat}}">{{$arabic->thais->ayat}}</option> 
    @endforeach
   </select>

   


<script>var urlmenu = document.getElementById( 'menu1' );
 urlmenu.onchange = function() {
      window.open( 'viewclass.php?classname=' + this.options[ this.selectedIndex ].value );
 };</script> 




    
 

    <!-- Example single danger button 
<div class="btn-group">
  <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </button>
  <ul class="dropdown-menu">
  @foreach($datas as $data)
    <li><a class="dropdown-item" href="{{ route('arabic', $arabics) }}">{{$data->th_name}}</a></li>
    @endforeach
  </ul>
</div>


     <li class="list-group-item  list-group-item-secondary"> <select id="ayahlist" class="ayah-list"><option  value="0" rel="0" >0-0</option>
           <option  value="1" rel="3" >1-3</option><option  value="4" rel="5" >4-5</option><option  value="6" rel="6" >6-6</option><option  value="7" rel="8" >7-8</option><option  value="9" rel="10" >9-10</option><option  value="11" rel="13" >11-13</option><option  value="14" rel="17" >14-17</option><option  value="18" rel="19" >18-19</option><option  value="20" rel="20" >20-20</option><option  value="21" rel="22" >21-22</option><option  value="23" rel="24" >23-24</option><option  value="25" rel="25" >25-25</option><option  value="26" rel="27" >26-27</option><option  value="28" rel="29" >28-29</option><option  value="30" rel="31" >30-31</option><option  value="32" rel="34" >32-34</option><option  value="35" rel="35" >35-35</option><option  value="36" rel="36" >36-36</option><option  value="37" rel="37" >37-37</option><option  value="38" rel="38" >38-38</option><option  value="39" rel="40" >39-40</option><option  value="41" rel="44" >41-44</option><option  value="45" rel="48" >45-48</option><option  value="49" rel="49" >49-49</option><option  value="50" rel="50" >50-50</option><option  value="51" rel="51" >51-51</option><option  value="52" rel="52" >52-52</option><option  value="53" rel="54" >53-54</option><option  value="55" rel="55" >55-55</option><option  value="56" rel="56" >56-56</option><option  value="57" rel="58" >57-58</option><option  value="59" rel="62" >59-62</option><option  value="63" rel="68" >63-68</option><option  value="69" rel="69" >69-69</option><option  value="70" rel="71" >70-71</option><option  selected  value="72" rel="73" >72-73</option></select>   </li>
  -->
          </ul>
          <br>
  <br>
         <h4 style = "font-family: 'Mitr', serif;" class="arabic text-center ">[{{$arabics->surah_arab}}]{{$arabics->th_name}}</h4> <!-- edit -->
         <br> 
         
         <div class="col-sm-3">
                <div class="form-group row">
                </div>
                </div>
                @foreach($arabics->arabic as $arabic )
      <div class="quran-font-intro ">
        <p>
        {{$arabic->text}}
        </p>
      </div>
      <p class="t">{{$arabic->transliteration}}</p>
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
          
            
            <!-- Bookmark
            
   <button type="button" class="btn btn-outline-secondary">
  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bookmarks" viewBox="0 0 16 16">
  <path d="M2 4a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v11.5a.5.5 0 0 1-.777.416L7 13.101l-4.223 2.815A.5.5 0 0 1 2 15.5V4zm2-1a1 1 0 0 0-1 1v10.566l3.723-2.482a.5.5 0 0 1 .554 0L11 14.566V4a1 1 0 0 0-1-1H4z"/>
  <path d="M4.268 1H12a1 1 0 0 1 1 1v11.768l.223.148A.5.5 0 0 0 14 13.5V2a2 2 0 0 0-2-2H6a2 2 0 0 0-1.732 1z"/>
  </svg>
 -->

   <!-- Note -->
    <!-- <button type="button" class="open-button "  data-toggle="modal" data-target="#exampleModal{{$arabic['id']}}" data-whatever="@mdo">โน๊ต</button>


<div class="modal fade" id="exampleModal{{$arabic['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">สร้างโน้ต</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">คำอธิบาย :</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        
          <p class="cautions">*กรุณาเข้าสู่ระบบก่อนสร้างโน้ต*</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        <button type="button" class="btn btn-success">บันทึก</button>
      </div>
    </div>
  </div>
</div>  -->

 <!-- //Create Note  -->
 @if ($errors->any())
 <div class="alert alert-danger">
     <strong>อุปส์</strong>
     มีบางอย่างผิดพลาด <br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif 
  <!-- Note   -->
<form action="{{ route('notes.store') }}" method="post">
    @csrf
  <button type="button" class="open-button5 "  data-toggle="modal" data-target="#exampleModal{{$arabic['id']}}" data-whatever="@mdo">โน๊ต</button>


 <div class="modal fade" id="exampleModal{{$arabic['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel{{$arabic['id']}}">สร้างโน้ต</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" name="title" >
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">คำอธิบาย :</label>
            <textarea class="form-control"name="description"></textarea>
          </div>

       </form>
       




      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-success">บันทึก</button>


      </div>

    </div>
  </div>
 </div>
</form>

 <!-- //Create Note  -->
 <!-- @if ($errors->any())
 <div class="alert alert-danger">
     <strong>อุปส์</strong>
     มีบางอย่างผิดพลาด <br><br>
<ul>
    @foreach($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif 
  <!-- Note  

<form action="{{ route('notes.store') }}" method="post">
    @csrf
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal{{$arabic['id']}}" data-bs-whatever="@getbootstrap">Open modal for @getbootstrap</button>

<div class="modal fade" id="exampleModal{{$arabic['id']}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      \
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">ชื่อเรื่อง :</label>
            <input type="text" class="form-control" id="recipient-name" name="title" >
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">คำอธิบาย :</label>
            <textarea class="form-control" id="message-text" name="description" ></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">ปิด</button>
        <button type="submit" class="btn btn-primary">บันทึก</button>
      </div>
    </div>
  </div>
</div>

</form> -->



                <!-- Button trigger modal TAFSEER _TEXT
            <button type="button" class="btn btn-secondary" data-bs-toggle="modal" 
            data-bs-target="#staticBackdrop{{$arabic['id']}}">ตัฟซีร</button>

<!-- Modal 
<div class="modal fade" id="staticBackdrop{{$arabic['id']}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog ">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">{{$arabics->th_name}} อายะห์ที่ {{$arabic->thais->ayat}}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-bs-dismiss="modal">ปิด</button>
    
      </div>
    </div>
  </div>
</div>

-->




  <!-- Button trigger modal TAFSEER _TEXT2-->

 
<form><button class="open-button2 "  type="button" data-toggle="collapse"
 data-target="#collapseExample{{$arabic['id']}}" aria-expanded="false" aria-controls="collapseExample">
ตัฟซีร
</button>
<div class="collapse" id="collapseExample{{$arabic['id']}}">
  <div class="well">
  @if($arabic->thais->tafseer == '')  <p class="cautions">*อายะห์นี้ยังไม่มีตัฟซีรภาษาไทย*</p> @endif
  <p>{{$arabic->thais->tafseer}}</p>
  </div>
</div>
<form>

<hr></form>

@endforeach
</div> 




@endsection