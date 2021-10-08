<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;

class QuransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function homepage()
    {
        
            $datasurahs = Datasurah::all();
            //return dd($datasurahs);
            return view('quran.home', [
                'datasurahs' => $datasurahs
            ]);
        
    }

    public function arabic($id)
    {  $datasurah = Datasurah::with('tafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
       // ->firstOrFail();

       // $plucked = $ayats->pluck('ayat.text', 'trans.text');
        
        //dd($arabics->toArray());
      
       //return dd($datasurahs);
       //return dd($arabics);
       //return view('test.detail', [
        //dd($ayats->toArray());
        //'ayats' => $ayats]);
    
      return view('quran.detail',compact('arabics','datasurah'));
    //   [
    //    //'datasurahs' => $datasurahs,
    //    'arabics' => $arabics
    // ]);
    //     //    'ayats' => $ayats
    //     //]);
    }



    public function tafseer_home()
    {
        
            $datasurahs = Datasurah::paginate(20);
           //return dd($datasurahs);
            return view('quran.tafseer_home', [
                'datasurahs' => $datasurahs
            ]);
        
    }

    public function tafseer_detail($id)
    {
        $tafseers = Datasurah::with('tafseer')->find($id);
      
        
       //dd($tafseers->toArray());
      
    
       
      return view('quran.tafseer_detail',compact('tafseers'));
        //    'ayats' => $ayats
        //]);
    }
    // public function detail()
    // {
    //     return view('quran.detail');
    // }
    // public function homepage()
    // {
    //     $surahs = DB::table('datasurahs')
    //     ->select('th_name')
    //     ->get();

    //     return view('quran.home',compact('surahs'));
    //     //return view('quran.home');
    // } 
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
