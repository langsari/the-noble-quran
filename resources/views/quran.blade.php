@extends('main')

@section('content1')

@include('layouts.navbar')
<div class="bg-light">
    <!--quran section-->
    <section class="quran">
        <br>
        <br>
        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img   src="/img/al-quran.png" width="200" height="180" />
                </div>
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


