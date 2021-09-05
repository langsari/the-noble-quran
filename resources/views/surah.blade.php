@extends('layouts.app')

@section('content')

    <div class="container my-5">


        <div class="row">
            <div class="col-12">
                <div class="card text-center" >
                    
                    <div class="card-body">
                        <h5 id="surah_name" class="card-title"></h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's content.</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">An item</li>
                        <li class="list-group-item">A second item</li>
                        <li class="list-group-item">A third item</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">Card link</a>
                        <a href="#" class="card-link">Another link</a>
                    </div>
                </div>
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
