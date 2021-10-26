@extends('layouts.appAdmin')

@section('content')
    <div class="container">

        @if (Session::get('approved'))
            <div class="alert alert-success">
                {{ Session::get('approved') }}
            </div>
        @endif
        @if (Session::get('fail'))
            <div class="alert alert-danger">
                {{ Session::get('fail') }}
            </div>
        @endif


        <div class="card text-center" >
            <div class="card-header">
                <h3> Admin | Dashboard</h3>
            </div>
        </div>
            <br>

        {{-- Start Profile --}}
            <div class="card">
                <div class="card-header">
                    <h5>Your Profile &nbsp; <i class="far fa-address-card"></i></h5>
                </div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table table-hover border table-bordered">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">{{ Auth::guard('admin')->user()->name }}</th>
                                <td>{{ Auth::guard('admin')->user()->email }}</td>
                                <td class="text-center">
                                    <a class=" text-info"><i class="fas fa-edit"></i> Edit</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        {{-- Start Profile --}}
        <br><hr><br>

        {{-- Start All Member --}}
        {{-- <div class="card">
            <div class="card-header">
                <h3>
                    All Members
                    <span class="badge badge-pill badge-primary">{{ $users->count() }}</span>
                </h3>

            </div>
            <div class="card-body">
                <table class="table table-hover border table-bordered">
                    <thead class="thead-dark">
                        <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $user->name }}</th>
                                <td>{{ $user->email }}</td>
                                <td class="text-center">
                                    <a class="text-center text-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div> --}}
        {{-- End All Member --}}


        {{-- Start All Member --}}
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#collapse2"
                            aria-expanded="true" aria-controls="collapseOne">
                            <h3>
                                All Members <i class="far fa-users"></i> &nbsp;
                                <span class="badge badge-pill badge-primary">{{ $users->count() }}</span>
                            </h3>
                        </button>
                    </h5>
                </div>

                <div id="collapse2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        <table class="table table-hover border table-bordered">
                            <thead class="thead-dark">
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <th scope="row">{{ $user->name }}</th>
                                        <td>{{ $user->email }}</td>
                                        <td class="text-center">
                                            <a class="text-center text-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                        </td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{-- End All Member --}}
        <br><hr><br>

        {{-- Start Nasiha  Approve --}}
        {{-- <div class="card">
            <div class="card-header">
                <h3>
                    All Nasiha Approved
                    <span class="badge badge-pill badge-success">{{ $nasihasApproved->count() }}</span>
                </h3>


            </div>

            <div class="card-body">
                @if ($nasihasApproved->count() > 0)
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
                            @foreach ($nasihasApproved as $nasiha)
                                <tr>
                                    <td scope="row">{{ $nasiha->title }}</td>
                                    <td>
                                        @php
                                            echo strlen($nasiha->description) > 40 ? substr_replace($nasiha->description, '...', 40) : $nasiha->description;
                                        @endphp

                                    </td>
                                    <td>
                                        <span style='padding: 2px;' class='text-center alert alert-success'>Published</span>
                                    </td>
                                    <td>
                                        <a class=" text-info"><i class="fas fa-edit"></i> Edit</a> |
                                        <a class=" text-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                        <a href="{{ route('nasiha.unApprove', $nasiha->id) }}" class=" text-danger"><i
                                                class="fas fa-trash-alt"></i> Unapprove</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h5 class="text-center alert alert-info">No Nasiha Posted</h5>
                @endif

            </div>
        </div> --}}
        {{-- End Nasiha  Approve --}}


        {{-- Start Nasiha  Approve --}}
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn" data-toggle="collapse" data-target="#collapse3"
                            aria-expanded="true" aria-controls="collapseOne">
                            <h3>
                                All Nasiha Approved <i class="far fa-smile"></i>
                                &nbsp;    <span class="badge badge-pill badge-success">{{ $nasihasApproved->count() }}</span>
                            </h3>
                        </button>
                    </h5>
                </div>

                <div id="collapse3" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        @if ($nasihasApproved->count() > 0)
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
                                    @foreach ($nasihasApproved as $nasiha)
                                        <tr>
                                            <td scope="row">{{ $nasiha->title }}</td>
                                            <td>
                                                @php
                                                    echo strlen($nasiha->description) > 40 ? substr_replace($nasiha->description, '...', 40) : $nasiha->description;
                                                @endphp

                                            </td>
                                            <td>
                                                <span style='padding: 2px;'
                                                    class='text-center alert alert-success'>Published</span>
                                            </td>
                                            <td>
                                                {{-- <a class=" text-info"><i class="fas fa-edit"></i> Edit</a> |
                                        <a class=" text-danger"><i class="fas fa-trash-alt"></i> Delete</a> --}}
                                                <a href="{{ route('nasiha.unApprove', $nasiha->id) }}"
                                                    class=" text-danger"><i class="far fa-frown"></i> Unapprove</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h5 class="text-center alert alert-info">No Nasiha Approved</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- End Nasiha  Approve --}}
        <br><hr><br>


        {{-- Start Nasiha Need To UN Approve --}}
        {{-- <div class="card">
            <div class="card-header">
                <h3>
                    All Nasiha Need To Approve
                    <span class="badge badge-pill badge-danger">{{ $nasihasNotApproved->count() }}</span>
                </h3>

            </div>

            <div class="card-body">

                @if ($nasihasNotApproved->count() > 0)
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
                            @foreach ($nasihasNotApproved as $nasiha)
                                <tr>
                                    <td scope="row">{{ $nasiha->title }}</td>
                                    <td>
                                        @php
                                            echo strlen($nasiha->description) > 40 ? substr_replace($nasiha->description, '...', 40) : $nasiha->description;
                                        @endphp

                                    </td>
                                    <td>
                                        <span style='padding: 2px;' class='text-center alert alert-danger'>Not Approved
                                            yet</span>
                                    </td>
                                    <td>
                                        <a class=" text-info"><i class="fas fa-edit"></i> Edit</a> |
                                        <a class=" text-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                                        <a href="{{ route('nasiha.approve', $nasiha->id) }}" class=" text-danger">
                                            Approve</a>

                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <h5 class="text-center alert alert-info">No Nasiha Need To Approve</h5>
                @endif

            </div>
        </div> --}}
        {{-- End Nasiha Need To UN Approve --}}

        {{-- Start Nasiha Need To UN Approve --}}
        <div id="accordion">
            <div class="card">
                <div class="card-header" id="headingOne">
                    <h5 class="mb-0">
                        <button class="btn " data-toggle="collapse" data-target="#collapseTwo"
                            aria-expanded="true" aria-controls="collapseOne">
                            <h3>
                                All Nasiha Need To Approve <i class="far fa-frown"></i> &nbsp;
                                <span class="badge badge-pill badge-danger">{{ $nasihasNotApproved->count() }}</span>
                            </h3>
                        </button>
                    </h5>
                </div>

                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                    <div class="card-body">
                        @if ($nasihasNotApproved->count() > 0)
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
                                    @foreach ($nasihasNotApproved as $nasiha)
                                        <tr>
                                            <td scope="row">{{ $nasiha->title }}</td>
                                            <td>
                                                @php
                                                    echo strlen($nasiha->description) > 40 ? substr_replace($nasiha->description, '...', 40) : $nasiha->description;
                                                @endphp

                                            </td>
                                            <td>
                                                <span style='padding: 2px;' class='text-center alert alert-danger'>Not
                                                    Approved
                                                    yet</span>
                                            </td>
                                            <td>
                                                {{-- <a class=" text-info"><i class="fas fa-edit"></i> Edit</a> |
                                        <a class=" text-danger"><i class="fas fa-trash-alt"></i> Delete</a> --}}
                                                <a href="{{ route('nasiha.approve', $nasiha->id) }}"
                                                    class=" text-danger"><i class="far fa-smile"></i> Approve</a>

                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        @else
                            <h5 class="text-center alert alert-info">No Nasiha Need To Approve</h5>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        {{-- End Nasiha Need To UN Approve --}}
        <br><hr><br>

    </div>
@endsection
