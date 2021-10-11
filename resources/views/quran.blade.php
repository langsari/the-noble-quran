@extends('main')

@section('title', 'The-Nobal-Quran | Quran')

@section('content')

@include('layouts.navbar')

    <!--quran section-->
    <section class="quran">
        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <h1 class="content-title" style="text-align: center;">Surah / Chapter</h1>
            </div>
        </div>
    
        <div class="container">
            <div class="surahsContainer">
                <!-- Where Surahs are viewed-->
            </div>
            
        </div>
    </section>

    @endsection


