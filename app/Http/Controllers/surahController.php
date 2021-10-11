<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class surahController extends Controller
{
    public function index(){
        return view('surah.index');
    } 
}

