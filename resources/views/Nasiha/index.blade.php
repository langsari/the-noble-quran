@extends('layouts.master')


@section('content')
    <h1 class="text-center">NASIHA</h1>
    <br>
    <hr>
    <!-- Page content-->
    <div class="container">
        <div class="row" style="justify-content: center;">
            <!-- Blog entries-->
            <div class="col-lg-8">
                <!-- Nested row for non-featured blog posts-->
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Blog post-->
                        @forelse ($nasihas as $nasiha)


                        <div class="card mb-4">
                            <a href="{{ route('nasiha.show',$nasiha->id) }}"><img class="card-img-top" src="https://dummyimage.com/700x350/dee2e6/6c757d.jpg"
                                    alt="..." /></a>
                            <div class="card-body">
                                <div class="small text-muted">{{ $nasiha->created_at }}</div>
                                <h2 class="card-title h4">{{ $nasiha->title }}</h2>
                                <p class="card-text">{{ $nasiha->description }}.</p>
                                <a class="btn btn-primary" href="{{ route('nasiha.show',$nasiha->id) }}">Read more →</a>
                            </div>
                        </div>
                        @empty
                            <h2 class="alert alert-info text-center">No Nasiha Posted</h2>
                        @endforelse

                    </div>
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
