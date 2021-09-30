@extends('main')

@section('title', 'IslamicPedia | Detail surah')

@section('content')

@include('layouts.navbar')

<section id="landing" class="py-3">
    <div class="container">

        <div class="text-center mb-5">
            <h1 style="color: #33b85d">{{ $detail['nama'] }}</h1>
            <h5 class="mb-3">{{ $detail['nama_latin'] }} | {{ $detail['arti'] }}</h5>
            <audio controls>
                <source src="{{ $detail['audio'] }}" type="audio/mpeg">
                Your browser does not support the audio element.
            </audio>
        </div>

        <div class="text-end mt-3 value">
            <div class="schedules" data-aos="fade-right" data-aos-duration="1500">
                @foreach ($detail['ayat'] as $item)
                <h6 class="text-start mb-3">Ayat {{ $item['nomor']}}.</h6>
                <h2 class="mb-3">{{ $item['ar']}}</h2>
                <h6 class=" mb-3">{{ $item['idn'] }}</h6>
                <hr class="mb-4">
                @endforeach
            </div>
        </div>

    </div>
</section>

@endsection