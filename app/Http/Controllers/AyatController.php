<?php

namespace App\Http\Controllers;

use App\Ayat;
use App\Surah;
use LaravelLocalization;
use App\Verse_translate;
use App\Tfasir;
use Illuminate\Http\Request;


class AyatController extends Controller
{


    public function showTh($id){

        // check in data base if found surah will return it if not return null
        $surah = Surah::where('surah_num',$id)->first();

        $ayats = verse_translate::where('surah_id',$id)->get();

        $tfasir = Tfasir::select(
                                    'url_'.LaravelLocalization::getCurrentLocale().' as url',
                                    'description_'.LaravelLocalization::getCurrentLocale().' as description'
                                )
                                ->where('surah_id',$id)->first();


        return view('Al_quran.surahTh',['ayats'=>$ayats,
                                        'tfasir'=>$tfasir,
                                        'surah'=>$surah
                                        ]);
    }



    public function showEn($id){

        $tfasir = Tfasir::select(
                                    'url_'.LaravelLocalization::getCurrentLocale().' as url',
                                    'description_'.LaravelLocalization::getCurrentLocale().' as description'
                                )
                                ->where('surah_id',$id)->first();


            if(!isset($tfasir) || $tfasir->url == 0  )
            return view('Al_quran.surahEn',['id'=> $id,
                                            'tfasir'=>'no'
                                            ]);

            return view('Al_quran.surahEn',['id'=> $id,
                                            'tfasir'=>$tfasir
                                            ]);
    }

}
