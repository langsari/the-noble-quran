<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quran;
use App\QuranThai;

class Qurans extends Controller
{
    //
    function Quran($id)
    {
        //return Quran::all();
        $qurans= Quran::where('SuraID',$id)->get();
      return view('Qurantext',['qurans'=>$qurans,'id'=>$id]);


      //$qurans=DB::table('quran_ar')
       // ->where('SuraID',$id)
       // ->get();
        //print_r($qurans);
       // foreach($qurans as $quran){echo $quran->AyahText."<br>";}

        //return view('content',['qurans'=>$qurans]);                      
    }

    function QuranThai($id)
    {
        //return Quran::all();
        $quransarab= Quran::where('SuraID',$id)->get();
        $quransthai= QuranThai::where('SuraID',$id)->get();
      return view('QuranThai',['quransthai'=>$quransthai,'quransarab'=>$quransarab,'id'=>$id]);


      //$qurans=DB::table('quran_ar')
       // ->where('SuraID',$id)
       // ->get();
        //print_r($qurans);
       // foreach($qurans as $quran){echo $quran->AyahText."<br>";}

        //return view('content',['qurans'=>$qurans]);                      
    }
    
}
