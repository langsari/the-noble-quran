@extends('layouts.master')


{{-- Contetn To Show All Sutah Name --}}
@section('content')
    <br>
    <div class="container py-2" style="margin-top: 100px;">

        <div id="main">
            <div id="content  ">
                <div style="text-align: center">
                    <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <h1 class="content-title ">Surah</h1>
                <h6 class="">BookMark</h6>
                <ul id='bookmark'>

                </ul>
                <hr>
                <div class="content-body">

                    <ul class="surah-list">
                        {{-- Here Will Display All Surahs Name --}}
                    </ul>

                </div>
            </div>
        </div>

    </div>


@endsection


@section('script')

    <script src="{{ asset('js/alquran/home/home.js') }}"></script>

@endsection
