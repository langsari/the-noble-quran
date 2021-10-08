<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;

class TafseersController extends Controller
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


    // public function tafseer_home()
    // {
        
    //         $datasurahs = Datasurah::paginate(20);
    //         //return dd($datasurahs);
    //         return view('quran.tafseer_home', [
    //             'datasurahs' => $datasurahs
    //         ]);
        
    // }

    // public function tafseer_detail($id)
    // {
    //     $tafseers = Datasurah::with('tafseer')->find($id);
    //    // ->firstOrFail();

    //    // $plucked = $ayats->pluck('ayat.text', 'trans.text');
        
    //    // dd($tafseers->toArray());
      
    //    //return dd($arabics);
      
    //    //return view('test.detail', [
    //     //dd($ayats->toArray());
    //     //'ayats' => $ayats]);
       
    //   return view('quran.tafseer_detail',compact('tafseers'));
    //     //    'ayats' => $ayats
    //     //]);
    // }

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
