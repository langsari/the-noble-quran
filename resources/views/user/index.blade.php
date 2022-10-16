@extends('layouts.adminmanageuser')

@section('content')
<div class="text-center">
                          <h1 class="h4 text-gray-900 mb-4">จัดการผู้ใช้งาน</h1>

                        </div>
<!-- <a class="btn btn-link float-end" href="{{ route('tafseers.create') }}">เพิ่มตัฟซีร</a> -->
<a href ="{{ route('user.create')}}" class ="btn btn-dark my-3"> เพิ่มผู้ใช้งาน </a>

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
            <th scope="col">ที่</th>
            <th scope="col">ชื่อ</th>
            <th scope="col">ดีกรี</th>
            <th scope="col">อีเมลล์</th>
            <th scope="col">รหัสผ่าน</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($users as $user) {{-- Loop users --}}
        <tr>
            <th scope="row">{{ $loop->iteration }}</th>
            <td>{{ $user->name }}</td>
            <td>{{ $user->is_admin }}</td>
            <td>{{ $user->email }}</td>
            <td>{{ $user->password }}</td>
            <td>

                <div class="dropdown"> {{-- Dropdown --}}
                    <button class="btn btn-danger btn-sm dropdown-toggle" type="button" id="actionDropdown"
                        data-mdb-toggle="dropdown" aria-expanded="false">
                        Action
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="actionDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.show', $user->id) }}">ดู</a></li> {{-- View --}}
                        <li><a class="dropdown-item" href="{{ route('user.edit', $user->id) }}">แก้ไข</a></li> {{-- Edit --}}
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li>
                            <form action="{{ route('user.destroy', $user->id) }}" method="post"> {{-- Delete --}}
                                @csrf
                                @method('delete')
                                <button type="submit" class="dropdown-item">Delete</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </td>
        </tr>
        @endforeach

    </tbody>
</table>
{{$users->links()}}

@endsection