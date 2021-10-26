<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Arabic;
use App\Datasurah;
use App\Thai;
use App\Tafseer;

use DB;

class QuransController extends Controller
{
    public function homepage()
    {
        
            $datasurahs = Datasurah::all();
            //return dd($datasurahs);
            return view('quran.home', [
                'datasurahs' => $datasurahs
            ]);
        
    }

    public function arabic($id)

    { 
        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
       
      return view('quran.detail',compact('datas','arabics','datasurah'));
    
    }
}
