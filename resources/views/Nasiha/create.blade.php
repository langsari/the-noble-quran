@extends('layouts.master')


@section('content')
    <div class="container text-center">
        <h1>Create Nasiha</h1>
        <br>
        <div class="card container" style="width:100%;  ">
            <div class="card-body " style="font-size: 1rem;">
                @if (Session::get('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                @endif
                @if (Session::get('fail'))
                    <div class="alert alert-danger">
                        {{ Session::get('fail') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('nasiha.store') }}" class="container " enctype="multipart/form-data">
                    @csrf
                    <div class=" row form-group  col-sm ">
                        <label for="exampleFormControlInput1">Title</label>
                        <input name="title" type="text" class="form-control" id="exampleFormControlInput1"
                            placeholder="Title" value='{{ old('title') }}'>

                    </div>
                    @error('title')
                        <span class="invalid-feedback" role="alert">
                            <h6>{{ $message }}</h6>
                        </span>
                    @enderror

                    <br>
                    <div class="row form-group col-sm  text-center">
                        <label for="exampleFormControlTextarea1 ">Description</label>
                        <textarea name="description" class="form-control" id="exampleFormControlTextarea1"
                            rows="5" >{{ old('description') }}</textarea>

                    </div>
                    @error('description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <div class="row form-group col-sm  text-center">
                        <label for="exampleFormControlTextarea1 ">Tumbnail</label>
                        <input type="file" name="img" class="form-control">

                    </div>
                    @error('img')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <br>
                    <button type="submit" class="card-link btn btn-primary">Create</button>

                </form>
            </div>
        </div>
    </div>



    <br><br>
@endsection
