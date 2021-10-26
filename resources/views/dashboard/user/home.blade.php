@extends('layouts.app')

@section('content')
    <div class="container">

        @if (Session::get('suc'))
            <div class="alert alert-success">
                {{ Session::get('suc') }}
            </div>
        @endif
        @if (Session::get('fai'))
            <div class="alert alert-danger">
                {{ Session::get('fai') }}
            </div>
        @endif

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
                            <td class="text-center">
                                <a class=" text-info"><i class="fas fa-edit"></i> Edit</a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
        <br>
        <br>


        <div class="card">
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
                                <th scope="col">Description</th>
                                <th scope="col">Status</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($nasihas as $nasiha)
                                <tr>
                                    <td scope="row">{{ $nasiha->title }}</td>
                                    <td>
                                        @php
                                            echo strlen($nasiha->description) > 40 ? substr_replace($nasiha->description, '...', 40) : $nasiha->description;
                                        @endphp

                                    </td>
                                    <td>
                                        @php
                                            echo $nasiha->approved == 0 ? "<span style='padding: 2px;' class='text-center alert alert-danger'>Waiting Admin to Approve <i class='far frown'></i></<span>" : "<span style='padding: 2px;' class='text-center alert alert-success'>Published <i class='far fa-smile'></i></<span>";
                                        @endphp</td>
                                    <td>
                                        <a class=" text-info"><i class="fas fa-edit"></i> Edit</a> |
                                        <a href="{{ route('nasiha.detele',$nasiha->id) }}" class=" text-danger"><i class="fas fa-trash-alt"></i> Delete</a>
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
