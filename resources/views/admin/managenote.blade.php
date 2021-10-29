@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    
            <div class="card">
                <div class="card-header">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">

    
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    
      <li class="nav-item">
        <a class="nav-link" href="{{ route('adminhome') }}">จัดการกุรอาน</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('manageuser') }}">จัดการผู้ใช้</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('managetafseer') }}">จัดการตัฟซีร</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('managenote') }}">จัดการโน้ต</a>
      </li>
   
    </ul>
</nav>
</div>

<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div>
<table class="table table-bordered">

<tr>
   <th>ที่</th>
   <th>หัวข้อ</th>
   <th>คำอธิบาย</th>
   <th width="5%">Action</th>
</tr>

    <tr>
       <td>1</td>
       <td>vafr</td>
       <td>vefg</td>
       <td>
         <form action="http://127.0.0.1:8000/posts/3" method="post">
            <a href="http://127.0.0.1:8000/posts/3" class="btn btn-primary">ดู</a>
            <input type="hidden" name="_token" value="h5zGlROZN7twSWTp9wg0z0PrSow3NC1gFmEa2mgg">     
         </form>
       </td>
   </tr>    
    <tr>
       <td>2</td>
       <td>s g</td>
       <td> sg</td>
       <td>
         <form action="http://127.0.0.1:8000/posts/5" method="post">
            <a href="http://127.0.0.1:8000/posts/5" class="btn btn-primary">ดู</a>
         
            <input type="hidden" name="_token" value="h5zGlROZN7twSWTp9wg0z0PrSow3NC1gFmEa2mgg">     
         </form>
       </td>
   </tr>    
    <tr>
       <td>3</td>
       <td>vf</td>
       <td>vf</td>
       <td>
         <form action="http://127.0.0.1:8000/posts/7" method="post">
            <a href="http://127.0.0.1:8000/posts/7" class="btn btn-primary">ดู</a>
         
            <input type="hidden" name="_token" value="h5zGlROZN7twSWTp9wg0z0PrSow3NC1gFmEa2mgg">     
         </form>
       </td>
   </tr>    
    <tr>
       <td>4</td>
       <td>bgd bm</td>
       <td>njn,jgh</td>
       <td>
         <form action="http://127.0.0.1:8000/posts/8" method="post">
            <a href="http://127.0.0.1:8000/posts/8" class="btn btn-primary">ดู</a>
           
            <input type="hidden" name="_token" value="h5zGlROZN7twSWTp9wg0z0PrSow3NC1gFmEa2mgg">     
         </form>
       </td>
   </tr>    
    <tr>
       <td>5</td>
       <td>hgnbm</td>
       <td>bjuknkh</td>
       <td>
         <form action="http://127.0.0.1:8000/posts/9" method="post">
            <a href="http://127.0.0.1:8000/posts/9" class="btn btn-primary">ดู</a>
          
            <input type="hidden" name="_token" value="h5zGlROZN7twSWTp9wg0z0PrSow3NC1gFmEa2mgg">         
         </form>
       </td>
   </tr>    

</table>  

@endsection