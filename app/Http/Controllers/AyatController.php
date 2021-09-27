<?php

namespace App\Http\Controllers;

use App\verse_translate;
use App\Video;
use Illuminate\Http\Request;

class AyatController extends Controller
{
    public function show($id){
        $ayats = verse_translate::where('surah_id',$id)->get();

        $videos = Video::where('surah_id',$id)->get();

        return view('surahTh',['ayats'=>$ayats,'videos'=>$videos]);
    }
}
