@extends('main')

@section('title', 'the-Nobal-Quran')

@section('content1')

@include('layouts.navbar')





 <!-- Masthead-->
 <header class="masthead">
    <div class="container px-4 px-lg-5 h-100">
        <div class="row gx-4 gx-lg-5 h-100 align-items-center justify-content-center text-center">
            <div class="col-lg-8 align-self-end">
                <div style="text-align: center">
                    <img src="https://www.al-quran.cc/images/system/al-quran.png" width="200" />
                </div>
                <hr class="divider" />
            </div>
            <div class="col-lg-8 align-self-baseline">
                <p class="text-white mb-10">إِنَّاۤ أَنزَلۡنَا عَلَیۡكَ ٱلۡكِتَـٰبَ لِلنَّاسِ بِٱلۡحَقِّۖ فَمَنِ ٱهۡتَدَىٰ فَلِنَفۡسِهِۦۖ وَمَن ضَلَّ فَإِنَّمَا یَضِلُّ عَلَیۡهَاۖ وَمَاۤ أَنتَ عَلَیۡهِم بِوَكِیلٍ</p>
                <a class="btn btn-primary btn-xl" href="/quran">Read Al-Quran</a>
            </div>
        </div>
    </div>
</header>


@endsection


