<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class quran_arController extends Controller
{
    //
    function checkDb()
    {
       // $quran=DB::select(' select * from quran_ar');
      //  print_r($quran);
     // return $quran;
     //echo "we are here";
        $qurans=DB::table('quran_ar')
        ->where('SuraID','1')
        ->get();
        //print_r($quran);
        view('content',['qurans'=>$qurans]);                    
    }
   
}
