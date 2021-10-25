<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ayat;


class AyattextController extends Controller
{
    //
    // function AyatArab($id)
    // {
    //     $ayats= AyatArab::where('SuraID',$id)->get();
    //     return view('AyatAr',['ayats'=>$ayats,'id'=>$id]);
    // }
    function AyatArab($id)
    {
        $ayats= AyatArab::where('SuraID',$id)->get();
        return view('AyatAr',['ayats'=>$ayats,'id'=>$id]);
    }
}
