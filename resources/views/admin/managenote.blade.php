@extends('layouts.adminmanageuser')



@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <!-- <div class="card"> -->
             

                <!-- <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


<div class="row mt-2">
    <div class ="col-md-12">
    <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">จัดการโน้ต</h1>

                        </div>
         
    </div>      
</div> 

@if($message = Session::get('success'))
    <div class ="alert alert-success">
        {{$message}}
</div>

@endif

<table class="table table-striped table-hover table-bordered">
    <thead>
 <tr>
    <th scope="col">ที่</th>
    <th scope="col">หัวข้อ</th>
    <th scope="col">คำอธิบาย</th>
    <th scope="col">Action</th>
 </tr>
 </thead>
    <tbody>
 @foreach ($data as $key => $value)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $value->title }}</td>
        <td>{{ Str::limit($value->description, 100) }}</td>
        <td>
 

                       
                        <form action="{{ route('posts.destroy', $value->id) }}">
                              
                       

                                 <!-- read -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-danger " data-toggle="modal" data-target="#myModal">
  ดู
</button>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel{{$value->id}}"></h4>
      </div>
      <div class="modal-body">
     
      <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-xl-8 col-lg-14 col-md-9">
              <div class="card o-hidden border-0 shadow-lg my-0">
                <div class="card-body p-0 bg-gray-500">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="p-5">
                        <div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">ดูโน้ต</h1>
                        </div>
                        <form class="form-group text-right">

                        <div class="form row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text">ลำดับที่ :</span>
                            </div>
                        
                            <div class="col-sm-4">
                              <input class="form-control" id="{{$value->id}}" name="id"  type="text" value="{{$value->id}}" readonly autocomplete="off">
                            </div>
                            </div>
                  

           

                          <div class="form-group row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text">ชื่อเรื่อง:</span>
                            </div>
                            <div class="col-sm-9">
                            <textarea class="form-control" style="height: 150px" name="text"   readonly >{{ $value->title }}</textarea>
                            </div>
                          </div>

                          <div class="form-group row">
                            <div class="col-sm-3">
                              <span class="h7 text-gray-900 mb-4 form-text">คำอธิบาย:</span>
                            </div>
                            <div class="col-sm-9">
                            <textarea class="form-control" style="height: 150px" name="Txet" readonly   >{{ Str::limit($value->description, 100) }}</textarea>
                            </div>
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
                            </form>
                
                            

                    
        </td>
    </tr>    
 @endforeach

 </tbody>
</table>



{!! $data->links() !!}

@endsection