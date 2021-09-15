@extends('main')

@section('title', 'IslamicPedia')

@section('content')

@include('layouts.navbar')

<section id="landing">
    <div class="container">
        <div class="row">
            <div class="col-md-12 desc">
                <h4 class="text-end mb-3" data-aos="fade-down" data-aos-duration="2000">بِسْمِ اللَّهِ الرَّحْمَنِ
                    الرَّحِيم</h4>
                <h4 style="text-align: justify; " data-aos="fade-down" data-aos-duration="1500  ">God sent down the Qur’an as an admonition and a healing for what is in the breasts,
                 a guidance and a mercy for the believers, and that it may be a proof against people,
                  and a light and insight for those who open their heart to him, who recite it,
                   worship and reflect upon it.</h4>
                <p class="fs-5 text-center text-secondary mt-4" data-aos="fade-down" data-aos-duration="1000">With the Qur'an life becomes calm</p>
                <a href="/surah" class="btn btn-dongker" data-aos="zoom-in" data-aos-duration="2500">Open Al-quran</a>
                <a href="/Pray Time" class="btn btn-outline-dongker" data-aos="zoom-in"
                    data-aos-duration="2200">Pray Time</a>
            </div>
           
        </div>
    </div>
</section>

@endsection