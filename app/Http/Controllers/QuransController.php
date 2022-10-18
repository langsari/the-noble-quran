<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\Qurantafseer;
use App\Models\Note;
use App\Models\Dua;

use DB;
use Illuminate\Support\Facades\Route;

class QuransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function index() {
            $datat = DB::table('datasurahs')->get();
            return view('quran.detail')->with('datat', $datat);
        }
    
    
        public function GetSubCatAgainstMainCatEdit($id){
            echo json_encode(DB::table('arabics')->where('datasurah_id', $id)->get());
        }

        public function main()
    {
        $datasurahs = Datasurah::all();
        return view('quran.main', [
            'datasurahs' => $datasurahs
        ]);
        
    }
    

    public function homepage()
    {
        $datasurahs = Datasurah::all();
            return view('quran.home', [
                'datasurahs' => $datasurahs
            ]);
    }

    public function arabic($id)
    { 
        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $tafseers =Datasurah::with('qurantafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
        return view('quran.detail',compact('datas','arabics','datasurah','tafseers'));
     }

     public function tafseer_home()
    {
            $datasurahs = Datasurah::paginate(20);
            return view('quran.tafseer_home', [
                'datasurahs' => $datasurahs
            ]);
        
    }
  
    public function tafseer_detail($id)
    {
        $tafseers = Datasurah::with('tafseer')->find($id);
       return view('quran.tafseer_detail',compact('tafseers'));
    }
  
    //public function dua($id)
    //{
    //    $dualists = Datasurah::with('tafseer')->find($id);
    //   return view('quran.dua',compact('tafseers'));
    //}

    //public function dua() {
    //    $tafseers = Datasurah::with('tafseer');
    //    return view('quran.dua',compact('tafseers'));
    //}

    public function dua() {
        $dua=Dua::all();
        return view('quran.dua' ,compact('dua'));
    }
 
    public function tafseer_vdo()
    {
        return view('quran.tafseer_vdo');
    }
    // public function tafseer_home()
    // {
    //     return view('quran.tafseer_home');
    // }
    // public function tafseer_detail()
    // {
    //     return view('quran.tafseer_detail');
    // }



    Public function dualists() {
        
        $dualist = DB::table("arabics")->where("id", 5)->select("text")->first();

        echo "<pre>";

        print_r($dualist);;
    }

    public function navbar()
    {
        return view('quran.navbar');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
