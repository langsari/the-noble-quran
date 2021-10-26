<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class QuranAudio extends Controller
{
    //
    function audio($id){
        view('ayah')->with('id', $id);

        return Http::get('https://api.quran.sutanlab.id/surah/${id}');

    }
}
