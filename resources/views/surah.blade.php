@extends('main')

@section('title', 'The-Nobal-Quran | Surah')

@section('content')

@include('layouts.navbar')

<section id="playlist">
    <div class="container">
        <div class="row">
            @foreach ($surah as $item)
            <div class="col-md-4 col-sm-1 mb-3">
                <div class="card" onclick="location.href='{{ route('surah.detail', $item['nomor']) }}'"
                    style="cursor: pointer;" data-aos="fade-down" data-aos-duration="1000">
                    <div class="card-body">
                        <h6>{{ $item['nomor'] }}.</h6>
                        <h3 class="card-title text-center" style="color: #33b85d;">{{ $item['nama'] }}</h3>
                        <h6 class="card-subtitle text-center">{{ $item['nama_latin'] }}</h6>
                        <hr>
                        <div class="text-center text-muted">
                            <p>{{ $item['tempat_turun'] }} | {{ $item['jumlah_ayat'] }} ayat</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
</section>

@endsection