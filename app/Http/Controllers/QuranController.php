<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\dictiory;

class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index($id)

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
        $tafseers =Datasurah::with('qurantafseer')->find($id);

        return view('enduser.detailuser', compact('datas', 'arabics', 'datasurah', 'tafseers'));
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



        return view('enduser.tafseer_detailuser', compact('tafseers'));
        //    'ayats' => $ayats
        //]);
    }

    public function dictionary()
    {
        $dictionary = dictiory::all();
        return view('enduser.Azkars', compact('dictionary'));
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
    public function Azkars()
    {
        return view('enduser.Azkars');
    }
}
