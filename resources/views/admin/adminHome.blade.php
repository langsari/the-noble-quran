@extends('layouts.adminmanageuser')

@section('content')
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">จัดการอัลกุรอาน</h1>

                        </div>
<!-- <a class="btn btn-link float-end" href="{{ route('tafseers.create') }}">เพิ่มตัฟซีร</a> -->
<!-- <a href ="{{ route('thai.create')}}" class ="btn btn-dark my-3"> เพิ่มผู้ใช้งาน </a> -->

{{-- Display message --}}
@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped table-hover table-bordered">
    <thead>
        <tr></tr>
        <tr>
            <!-- <th scope="col">ที่</th> -->
            <th style="width:8%" scope="col">อายะห์ที่</th>
            <th scope="col">คำแปล</th> 
            <th scope="col">เสียง</th>
            <th style="width:8%" scope="col">ซูเราะห์ที่</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($thais as $thai) {{-- Loop thais --}}
        <tr>
            <!-- <th scope="row">{{ $loop->iteration }}</th> -->
            <td>{{ $thai->ayat }}</td>
            <td>{{ $thai->Text }}</td>
            <td>{{ $thai->audio }}</td>
            <td>{{ $thai->datasurah_id }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('thai.show', $thai->id) }}">ดู</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('thai.edit', $thai->id) }}">แก้ไข</a></li> {{-- Edit --}}
                      
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>

{{$thais->links()}}
@endsection



