<?php

namespace App\Http\Controllers;

use App\Ayat;
use Illuminate\Http\Request;

class AyatController extends Controller
{
    public function show($id){
        $ayats = Ayat::where('surah_id',$id)->get();

        return view('surahTh',['ayats'=>$ayats]);
    }
}
