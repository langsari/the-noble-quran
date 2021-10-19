@extends('main')

@section('title', 'The-Nobal-Quran | Quran')

@section('content1')

@include('layouts.navbar')
<div class="bg-dark">
    <!--quran section-->
    <section class="quran">
        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img   src="/img/al-quran.png" width="400" height="200" />
                </div>
                <h1 class="content-title text-primary" style="text-align: center;">Surah / Chapter</h1>
            </div>
        </div>
    
        <div class="container">
            <div class="surahsContainer">
                <!-- Where Surahs are viewed-->
            </div>
            
        </div>
    </section>

</div>

    @endsection


