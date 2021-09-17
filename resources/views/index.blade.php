@extends('main')

@section('title', 'IslamicPedia')

@section('content')

@include('layouts.navbar')

<section id="landing">
    <div class="container">
        <div class="row">
            <div class="col-md-4 desc">
                <h4 class="text  mb-2" style="text-align: center;   font-size: xx-large;" data-aos="fade-down" data-aos-duration="2000">بِسْمِ اللَّهِ الرَّحْمَنِ الرَّحِيم</h4>
                <h4 style="text-align: justify; " data-aos="fade-down" data-aos-duration="1500  ">God sent down the Qur’an as an admonition and a healing for what is in the breasts,
                 a guidance and a mercy for the believers, and that it may be a proof against people,
                  and a light and insight for those who open their heart to him, who recite it,
                   worship and reflect upon it.</h4>
                <p class="fs-5 text-center  mt-4" style="color: white;" data-aos="fade-down" data-aos-duration="1000">With the Qur'an life becomes calm</p>
                <a href="/#" class="btn btn-dongker" data-aos="zoom-in" data-aos-duration="2500">Open Al-quran</a>
                <a href="/time-pray" class="btn btn-outline-dongker" data-aos="zoom-in"
                    data-aos-duration="2200">Pray Time</a>
            </div>
           
        </div>
    </div>
</section>

@endsection