<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class appController extends Controller
{
    public function index()
    {
        $playing = Http::get('https://api.npoint.io/99c279bb173a6e28359c/surat/{nomor}');
        $dataPlaying =  $playing->json();
        return view('index', compact('dataPlaying'));
    }
}
