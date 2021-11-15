
@extends('layouts.staffmanage')

@section('content')

 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    

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
                              <input class="form-control" id="staff_name" name="staff_name"  type="text" value="อัล-ฟาติหะฮฺ" readonly autocomplete="off">
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">อายะห์ที่ :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_surname" name="staff_surname"  type="text"  value="1" readonly autocomplete="off">
                            </div>
                          </div>

                          <div class="form row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ประเภท :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_name" name="staff_name"  type="text" value="มักกียะห์" readonly autocomplete="off">
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">เสียง :</span>
                            </div>
                            <div class="col-sm-4">
                              <input class="form-control" id="staff_surname" name="staff_surname"  type="text"  value="001001.mp3"  autocomplete="off">
                            </div>
                          </div>
<!-- 
                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">ระดับ :</span>
                            </div>
                            <div class="col-sm-4">
                              <select class="form-control" type="text" name="degree" id="degree" onChange="getTeam(this.value);">
                                <option value="">โปรดเลือกระดับ</option>
                                                                  <option value="1">โรงพยาบาล</option>
                                                                  <option value="3">ทีม</option>
                                                                  <option value="2">หน่วยงาน</option>
                                                              </select>
                            </div>
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">หน่วยงาน :</span>
                            </div>
                            <div class="col-sm-4">
                              <select class="form-control" type="text" id="team" name="team">
                                <option value="">โปรดเลือกระดับก่อน</option>
                              </select>
                            </div>
                          </div> -->

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">กุรอาน :</span>
                            </div>
                            <div class="col-sm-10">
                            <textarea class="form-control" style="height: 150px" name="description"   readonly >بِسْمِ اللَّهِ الرَّحْمَٰنِ الرَّحِيمِ</textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-2">
                              <span class="h7 text-gray-900 mb-4 form-text">คำแปล :</span>
                            </div>
                            <div class="col-sm-10">
                            <textarea class="form-control" style="height: 150px" name="description" >ด้วยพระนามของอัลลอฮฺ ผู้ทรงกรุณาปราณี ผู้ทรงเมตตาเสมอ</textarea>
                            </div>
                          </div>
                         
                          <div class ="col-md-12">
                          <a class="btn btn-secondary" href="{{ route('staffhome') }}">บันทึก</a>
                          <a class="btn btn-secondary" href="{{ route('staffhome') }}">ยกเลิก</a>
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
      

</div>
 @endsection