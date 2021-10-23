@extends('layouts.app')

@section('content')
    <div class="container">

                <div class="card">
                    <div class="card-header">
                        <h3>User | Dashboard</h3>
                    </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h6>Your Profile</h6>
                        <table class="table table-hover text-center border table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">{{ Auth::user()->name }}</th>
                                    <td>{{ Auth::user()->email }}</td>
                                    <td><a href="{{ route('user.logout') }}"
                                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a>
                                        <form id="logout-form" method="POST" action="{{ route('user.logout') }}"
                                            class="d-none">@csrf</form>
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <br>
                <br>


                <div class="card" >
                    <div class="card-header">
                        <h3>Your Nasiha</h3>
                    </div>

                    <div class="card-body">

                        <a style="text-decoration: none ;color: white;" href="{{ route('nasiha.create') }}">
                            <h4 class="btn btn-primary">Add</h4>
                        </a>
                        <hr>


                        @if ($nasihas->count() > 0)
                            <table class="table table-hover text-center table-bordered">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col" class="">Title</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($nasihas as $nasiha)
                                    <tr>
                                        <td scope="row">{{ $nasiha->title}}</td>
                                        <td>
                                            @php
                                        echo substr($nasiha->description,4);
                                            @endphp

                                            </td>
                                            <td>
                                            @php
                                            echo (($nasiha->approved)==0) ?"<span class='text-center alert alert-danger'>Waiting Admin to Approve</<span>" :"Published";
                                        @endphp</td>
                                        <td><a href="{{ route('user.logout') }}"
                                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a>
                                            <form id="logout-form" method="POST" action="{{ route('user.logout') }}"
                                                class="d-none">@csrf</form>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h5 class="text-center alert alert-info">No Nasiha Posted</h5>
                        @endif

                    </div>
                </div>

    </div>
@endsection
