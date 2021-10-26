@extends('layouts.master')


@section('content')

    <h1 class="text-center">Welcome to Da'wah community!
    </h1>
    <br>
    <hr>
    <!-- Page content-->
    <div class="container">
        <div class="row" style="justify-content: center;">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                        <!-- Blog post-->
                        @forelse ($nasihas as $nasiha)

                        <div class="col-lg-6">

                            <div class="card  mb-4">
                                <a href="{{ route('nasiha.show',$nasiha->id) }}"><img class="card-img-top" src="{{ asset('post_img') }}/{{ $nasiha->img }}"
                                        alt="..." /></a>
                                <div class="card-body">
                                    <div class="small text-muted">{{ $nasiha->created_at }}</div>
                                    <div class="text-md text-muted">By : {{ $nasiha->user->name }}</div>
                                    <hr>
                                    <h2 class="card-title h4">{{ $nasiha->title }}</h2>
                                    <p class="card-text">
                                        @php
                                            echo (strlen($nasiha->description )> 40) ? substr_replace($nasiha->description,"...",40) : $nasiha->description;
                                        @endphp
                                    </p>
                                    <a class="btn btn-primary" href="{{ route('nasiha.show',$nasiha->id) }}">Read more →</a>
                                </div>
                            </div>
                        </div>

                        @empty
                            <div class="text-center"><h2 class="alert alert-info text-center">No Nasiha Posted</h2></div>
                        @endforelse

                </div>
            </div>
        </div>
    </div>
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    </body>

    </html>

@endsection
