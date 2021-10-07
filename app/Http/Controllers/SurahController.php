<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurahController extends Controller
{
   public function showSurah ($id){
       return view('surah',['id'=>$id]); 
   }
    //
}
