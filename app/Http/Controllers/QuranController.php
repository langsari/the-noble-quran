<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;


class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($id)
    // {
        
    //         $datasurahs = Datasurah::with('arabic.thais')->find($id);
    //        // $arabics = Datasurah::with('arabic.thais')->find($id);
    //         return dd($datasurahs);
    //         return view('qurans.index', [
    //             'datasurahs' => $datasurahs
    //            // 'arabics' => $arabics
    //         ]);
        
    // }

    // public function alls($id)
    // {
    //     $arabics = Datasurah::with('arabic.thais')->find($id);
    //    // ->firstOrFail();

    //    // $plucked = $ayats->pluck('ayat.text', 'trans.text');
        
    //    // dd($arabics->toArray());
      
    //    // return dd($arabics);
      
    //    //return view('test.detail', [
    //     //dd($ayats->toArray());
    //     //'ayats' => $ayats]);
       
    //   return view('qurans.detail',compact('arabics'));
    //     //    'ayats' => $ayats
    //     //]);
    // }

    // public function all($id)
    // {
    //     $arabics = Datasurah::with('arabic.thais')->find($id);
    //    // ->firstOrFail();

    //    // $plucked = $ayats->pluck('ayat.text', 'trans.text');
        
    //     //dd($arabics->toArray());
      
    //    // return dd($arabics);
      
    //    //return view('test.detail', [
    //     //dd($ayats->toArray());
    //     //'ayats' => $ayats]);
       
    //   return view('qurans.detail',compact('arabics'));
    //     //    'ayats' => $ayats
    //     //]);
    // }
    public function homeuser()
    {
        
            $datasurahs = Datasurah::all();
            //return dd($datasurahs);
            return view('enduser.homeuser', [
                'datasurahs' => $datasurahs
            ]);
        
    }

    public function surah($id)

    { 
        $arabics = Datasurah::with('arabic.thais')->find($id);
        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
     
    
      return view('enduser.detailuser',compact('datas','arabics','datasurah'));
  
    }

 
    public function tafseer_homeuser()
    {
        
            $datasurahs = Datasurah::paginate(20);
           //return dd($datasurahs);
            return view('enduser.tafseer_homeuser', [
                'datasurahs' => $datasurahs
            ]);
        
    }
    public function tafseer_detailuser($id)
    {
        $tafseers = Datasurah::with('tafseer')->find($id);
      
        
       //dd($tafseers->toArray());
      
    
       
      return view('enduser.tafseer_detailuser',compact('tafseers'));
        //    'ayats' => $ayats
        //]);
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


