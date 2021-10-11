
@extends('main')

@section('title', 'The-Nobal-Quran | Salawat')

@section('content')

@include('layouts.navbar')

<section class="pray">
    <h3>PRAY TIME</h3>
    <div class="container">
        <div class="cards">
            <div class="card">
            <div class="circle">
                <svg>
                    <Circle cx="100" cy="100" r="100"></Circle>
                </svg>
                <div class="praytime">2:30</div>
              </div>
              <p>Sunset</p>
            </div>
        </div>
    </div>
</section>

@endsection