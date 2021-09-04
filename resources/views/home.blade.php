@extends('layouts.app')


{{-- Contetn To Show All Sutah Name --}}
@section('content')

    <div id="main">
        <div id="content  ">
            <div style="text-align: center">
                <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
            </div>
            <h1 class="content-title ">Surah / Chapter</h1>
            <div class="content-body">

                <ul class="surah-list">
                    {{-- Here Will Display All Surahs Name --}}
                </ul>

            </div>
        </div>
    </div>

@endsection
