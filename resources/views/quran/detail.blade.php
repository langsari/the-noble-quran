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
  background-color: #B3B6B7;
  color: Black;
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
    color:#000000;
  }
  .quran-font-intro  p{
     font-family: quran-font;
     direction: rtl;
     font-size: 26px;
     line-height: 200%;
     color:#000000;  /* เปลี่ยนสีฟอนต์ */
   }
   .highlight{ 
  background:#00FF00; 
  padding:1px; 
  border:#00CC00 dotted 1px; 
}
        
     

      </style>
       <br>
    <br>
    <!-- ภาพพิ้นหลัง กุรอาน -->
 <div style = background-color:#B3B6B7; class="search-area">
 <div class="row">
    <div class="col-md-8 mx-auto">
<br>
<br>

<ul class="list-group bg-white list-group-horizontal  ">

<!-- read quran-->
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark " data-toggle="modal" data-target="#myModal">
Quran reading mode
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

<!-- tafseer -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-dark " data-toggle="modal" data-target="#myModal2">
Tafsir quran
</button>

<!-- Modal -->
<div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
       <h4 class="modal-title" id="myModalLabel2"></h4>
      </div>
      <div class="modal-body">
       
      @foreach($tafseers->qurantafseer as $tafseer ) 
      @if($tafseer->status == 'อนุมัติ') 
      <h4>{{$tafseer->name}}(อายะห์ที่ {{$tafseer->arabic_id}})</h4>
        <p>
       
      {{$tafseer->qurantafseer}} 
     
      </p>
   
    <div class ="card-text">   
        <strong>ที่มา : </strong>
        {{ $tafseer->resource }}
      </div> 
      <hr>
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
               data-toggle="modal">Watch video of Tafsir Al-Quran</a>
 
            <div id="Geeks2" class="modal fade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button"
                                    class="close"
                                    data-dismiss="modal"
                                    aria-hidden="true">×</button>
                                    <h4 class="modal-title">Tafsir surah video{{$arabics->th_name}}</h4>
                        </div>
                        <div class="modal-body">
                        @foreach($datasurah->tafseer as $tafseer )
                           @if($tafseer->status == 'อนุมัติ') 
                        <p>{{$tafseer->name}}</p>
                            <iframe id="Geeks3" width="450" height="350"
                           src="https://www.youtube.com/embed/{{$tafseer->youtubeId}}"
                            frameborder="0" allowfullscreen>
                            </iframe>
                            <br>
                            <br>
                          
                          @endif  
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


<!-- dropdown surah&& ayah : can link-->
    <div class="col-md-3 ">
             
             <div class="form-s2 ">
                 <div>
   
    <select class="form-control "  name="forma" onchange="location = this.options[this.selectedIndex].value;" id="surah_list">
    <option value="#" style="color:white" >Surah</option>
    @foreach($datas as $data)
    <option value="{{ route('arabic', $data) }}" title="{{$data->th_name}}">
   {{$data->th_name}} [{{$data->whole_ayah}}]</option>@endforeach </select>
    </div>
    </div>
    </div>

    <div class ="col-md-3 ">
   
    <select class="form-control  " name="menu1" id="{{$data->id}}">
    <option value="#" >Verses</option>
    @foreach($arabics->arabic as $arabic )  
   <option value="{{$arabic->thais->ayat}}">{{$arabic->thais->ayat}}</option> 
    @endforeach
   </select>
   
  <script>var urlmenu = document.getElementById( 'menu1' );
     urlmenu.onchange = function() {
      window.open( 'viewclass.php?classname=' + this.options[ this.selectedIndex ].value );
  };</script> 

</ul>
<br>
<br>
<!-- detail The Quran -->
         <h4 class="arabic text-center ">[{{$arabics->surah_arab}}]{{$arabics->th_name}}</h4>
         <br> 
         
         <div class="col-sm-3">
         <div class="form-group row">
        </div>
        </div>

<!-- การดึงข้อมูลแปลภาษา -->
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
   <button type="button" class="open-button "  data-toggle="modal" data-target="#exampleModal{{$arabic['id']}}" data-whatever="@mdo">โน๊ต</button>


<div class="modal fade" id="exampleModal{{$arabic['id']}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Creat Note</h4>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="control-label">Heading :</label>
            <input type="text" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="control-label">Description :</label>
            <textarea class="form-control" id="message-text"></textarea>
          </div>
        
          <p class="cautions">*Please login before creating a note.*</p>  <a class="cautions2" href="{{ route('login') }}">Go to login page</a>
         
        </form>
      </div>
      <div class="modal-footer">
      <!-- <a href ="{{ route('login')}}" class ="btn btn-dark my-3">ไปหน้าเข้าสู่ระบบ</a> -->
      <button type="button" class="btn btn-dark">Save</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
         </div>
    </div>
  </div>
</div>

<!-- Button trigger modal TAFSEER -->
 <button class="open-button2 "  type="button" data-toggle="collapse"
 data-target="#collapseExample{{$arabic['id']}}" aria-expanded="false" aria-controls="collapseExample">
 ตัฟซีร
 </button>
 <div class="collapse" id="collapseExample{{$arabic['id']}}">
  <div class="well">
  @if($arabic->thais->tafseer == '')  <p class="cautions">*อายะห์นี้ยังไม่มีตัฟซีรภาษาไทย*</p> @endif
  <p>{{$arabic->thais->tafseer}}</p>
  </div>
</div>

<hr>

@endforeach
</div> 
@endsection