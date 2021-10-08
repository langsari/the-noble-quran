<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class appController extends Controller
{
    public function index()
    {
        $apisurah = Http::get('https://equran.id/api/surat');
        $surah =  $apisurah->json();
        return view('surah', compact('surah'));
    }

    public function detail($id)
    {

        $detailsurah = Http::get('https://equran.id/api/surat/' . $id);
        $detail = $detailsurah->json();

        return view('detail', compact('detail'));
    }
}
