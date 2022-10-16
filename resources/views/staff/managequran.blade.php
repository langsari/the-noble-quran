@extends('layouts.staffmanage')

@section('content')

<div class="container">
  
        <table class="table  table-bordered  ">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>ภาษาอาหรับ</th>
                        <th>คำเเปล</th>
                        <!-- <th>ตัฟซีร</th> -->
                        <th width = 15%>Action</th>
                    </tr>
                </thead>
                <tbody>
             
                @foreach($arabics->arabic as $arabic ) 
                    <tr>
                        <td scope="row">{{$arabic->thais->ayat}}</td>
                        <td>{{$arabic->text}}</td>
                        <td>{{$arabic->thais->Text}}</td>
                        <!-- <td>{{$arabic->thais->tafseer}}</td> -->
                        <td>
                       <a href="{{ route('editquran') }}" class="btn btn-info">ดู</a>
                       <a href="{{ route('editquran',$datasurah) }}" class="btn btn-warning">แก้ไข</a>
                      
                        </td>
                    </tr>
                    @endforeach



                </tbody>
            </table>

          

      
</div>
@endsection