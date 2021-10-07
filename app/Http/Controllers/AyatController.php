<?php

namespace App\Http\Controllers;
use LaravelLocalization;
use App\verse_translate;
use App\Video;
use Illuminate\Http\Request;

class AyatController extends Controller
{
    public function showTh($id){
        $ayats = verse_translate::where('surah_id',$id)->get();

        $video = Video::select('url_'.LaravelLocalization::getCurrentLocale().' as url','description')->where('surah_id',$id)->first();


        return view('Al_quran.surahTh',['ayats'=>$ayats,'video'=>$video]);
    }

    public function showEn($id){

        $video = Video::select('url_'.LaravelLocalization::getCurrentLocale().' as url','description')->where('surah_id',$id)->first();
            if(!isset($video) || $video->url == 0  )
            return view('Al_quran.surahEn',['id'=> $id,'video'=>'no']);

        return view('Al_quran.surahEn',['id'=> $id,'video'=>$video]);
    }
}
