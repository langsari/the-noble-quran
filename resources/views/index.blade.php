@extends('main')

@section('title', 'The-Nobal-Quran')

@section('content')

@include('layouts.navbar')

<section id="landing">
    <div class="container">
        <div class="row">
            <div class="col-md-6 desc">
                <h4 class="text-end mb-3" data-aos="fade-down" data-aos-duration="2000">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h4>
                <h4 style="text-align: justify;" data-aos="fade-down" data-aos-duration="1500">"The Qur'an is a friend, who will never disappoint you, either in this world or in the hereafter."</h4>
                <p class="fs-5 text-center text-secondary mt-4" data-aos="fade-down" data-aos-duration="1000">With the Qur'an life becomes calm</p>
                <a href="/surah" class="btn btn-dongker" data-aos="zoom-in" data-aos-duration="2000">Open-al-Qur'an</a>
                <a href="/jadwalSholat" class="btn btn-outline-dongker" data-aos="zoom-in"
                    data-aos-duration="2200">Jadwal Sholat</a>
            </div>
            <div class="col-md-6 d-none d-md-block bg-img">
                <img src="{{ ('img/bg-img.png') }}" alt="" style="margin-left: 135px; margin-top: -30px;">
            </div>
        </div>
    </div>
</section>

@endsection