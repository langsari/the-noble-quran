@extends('layouts.admin')

@section('content')


<div class="container">
  
        <table class="table  table-bordered  ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ภาษาอาหรับ</th>
                        <th>คำเเปล</th>
                        <th>เสียง</th>
                     
                        <th width = 12%>Action</th>
                    </tr>
                </thead>
                <tbody>
             <!-- dd{{$arabics}} -->
                @foreach($arabics->arabic as $arabic ) 
                    <tr>
                        <td scope="row">{{$arabic->thais->ayat}}</td>
                        <td>{{$arabic->text}}</td>
                        <td>{{$arabic->thais->Text}}</td>
                        <td>{{$arabic->thais->audio}}</td>
                        
                        <td>
                       <a href="{{ route('editquran',$datasurah) }}" class="btn btn-info">ดู</a>
                       <a href="{{ route('editquran',$datasurah) }}" class="btn btn-warning">แก้ไข</a>
                       <a href="{{ route('editquran',$datasurah) }}" class="btn btn-warning">edit</a>
                      
                                 <!-- read -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-warning " data-toggle="modal" data-target="#myModal">
  แก้ไข
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">{{$arabics->surah_arab}}</h4>
      </div>
      <div class="modal-body">
      <p class="quran-font">@foreach($arabics->arabic as $arabic ) 
      {{$arabic->text}}
      [{{$arabic->thais->ayat}}]
      [{{$arabic->thais->Text}}]
      [{{$arabic->thais->audio}}]
      @endforeach</p>  
      <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-0">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">เเก้ไข</h1>
                        </div>
                        <form class="form-group text-right">

                        
                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ชื่อซูเราะห์ :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="{{$arabics->id}}" name="th_name"  type="text" value="{{$arabics->th_name}}" readonly autocomplete="off">
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">อายะห์ที่ :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="{{$arabic->thais->ayat}}" name="ayat"  type="text"  value="{{$arabic->thais->ayat}}" readonly autocomplete="off">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ประเภท :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="{{$arabics->id}}" name="id"  type="text" value="{{$arabics->type}}" readonly autocomplete="off">
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">เสียง :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="{{$arabic->thais->ayat}}" name="audio"  type="text"  value="{{$arabic->thais->audio}}"  autocomplete="off">
                            </div>
                          </div>

           

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">กุรอาน :</span>
                            </div>
                            <div class="col-sm-10">
                            <textarea class="form-control" style="height: 150px" name="text"   readonly >{{$arabic->text}}</textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">คำแปล :</span>
                            </div>
                            <div class="col-sm-10">
                            <textarea class="form-control" style="height: 150px" name="Txet" >{{$arabic->thais->Text}}</textarea>
                            </div>
                          </div>
                         
                          <div class ="col-md-12">
                          <a class="btn btn-secondary" href="{{ route('adminhome') }}">บันทึก</a>
                          <a class="btn btn-secondary" href="{{ route('adminhome') }}">ยกเลิก</a>
                         </div>
                          
                         
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div id="result" style="padding-top: 50px; width: 100%"></div>
          </div>
        </div>
      </div>
      
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ปิด</button>
       
      </div>
</div>
                      
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>


<!--     
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" data-dismiss="modal">ปิด</button>
       
      </div> -->
    </div>
  </div>
</div>

      
</div>
@endsection