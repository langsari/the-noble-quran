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
                          <h1 class="h4 text-gray-900 mb-4">ดูโน้ต</h1>

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
    <th scope="col">ชื่อผู้ใช้</th>
    <!-- <th scope="col">Action</th> -->
 </tr>
 </thead>
    <tbody>
    @foreach ($datas as $data)
    <tr>
       
        <td>{{ $loop->iteration }} </td> 
        <td>{{ $data->title }}</td>
        <td>{{ Str::limit($data->description, 100) }}</td>
        <!-- <td>
        
                              
                       
                                 -->
    </tr>    
 @endforeach

 </tbody>
</table>



{!! $datas->links() !!}

@endsection
