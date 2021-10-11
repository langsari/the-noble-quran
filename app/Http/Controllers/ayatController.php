<?php

namespace App\Http\Controllers;

use App\verse_translate;
use App\Video;
use Illuminate\Http\Request;

class AyatController extends Controller
{
    /*public function showTh($id){
        $ayats = verse_translate::where('surah_id',$id)->get();

        $videos = Video::where('surah_id',$id)->get();

        return view('surah',['ayats'=>$ayats,'videos'=>$videos]);
    }*/

    public function showSurah ($id){
        return view('surah',['id'=>$id]); 
    }


    public function showEn($id){


        return view('surah')->with('id', $id);
    }

       

}




