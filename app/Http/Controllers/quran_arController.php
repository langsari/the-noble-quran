<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class quran_arController extends Controller
{
    //
    function checkDb($id)
    {
       // $quran=DB::select(' select * from quran_ar');
      //  print_r($quran);
     // return $quran;
     //echo "we are here";
        $qurans=DB::table('quran_ar')
        ->where('SuraID',$id)
        ->get();
        //print_r($qurans);
        foreach($qurans as $quran){echo $quran->AyahText."<br>";}

        //return view('content',['qurans'=>$qurans]); 
                           
    }
   
}
