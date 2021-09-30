@extends('main')

@section('title', 'IslamicPedia - Jadwal Sholat')

@section('content')

@include('layouts.navbar')

<section id="jadwal">
    <div class="container">
        <div class="text-center title">
            <h3 data-aos="fade-in" data-aos-duration="1500">Jadwal Sholat</h3>
        </div>
        <div class="text-end mt-3 value">
            <div class="schedules" data-aos="fade-right" data-aos-duration="1500">
                <h4>Subuh</h4>
                <h5>04:38</h5>
                <hr>
            </div>
            <div class="schedules" data-aos="fade-right" data-aos-duration="1800">
                <h4>Dzuhur</h4>
                <h5>11:54</h5>
                <hr>
            </div>
            <div class="schedules" data-aos="fade-right" data-aos-duration="2100">
                <h4>Ashar</h4>
                <h5>15:17</h5>
                <hr>
            </div>
            <div class="schedules" data-aos="fade-right" data-aos-duration="2400">
                <h4>Maghrib</h4>
                <h5>17:48</h5>
                <hr>
            </div>
            <div class="schedules" data-aos="fade-right" data-aos-duration="2700">
                <h4>Isya</h4>
                <h5>19:02</h5>
                <hr>
            </div>
        </div>
    </div>
</section>

@endsection