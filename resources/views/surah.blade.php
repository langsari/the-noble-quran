@extends('layouts.app')

@section('content')

    <div class="container my-5">


        <div class="row">
            <div class="col-12">
                <h5 class="text-center">Surah ID= {{ $id }}</h5>
            </div>
        </div>

        <div class="row d-flex justify-content-center  my-5">
            <div class="cos-12">
                <div>
                    <ul class="ayat ">
                    </ul>
                </div>
            </div>
        </div>


    </div>
@endsection
