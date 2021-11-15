<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Models\Tafseer;

class TafseersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$tafseer = Tafseer::with('data')->get();
        $tafseers = Tafseer::paginate(5);
          return view('tafseers.index',compact('tafseers'));
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
        return view('tafseers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'datasurah_id' => 'required',
            'youtubeId' => 'required',
        ]);

        Tafseer::create($data);

      
       // Tafseer::create($request->all());

        return redirect()->route('tafseers.index')->with('success', 'เพิ่มวิดีโอตัฟซีรสำเร็จ');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Tafseer $tafseer)
    {
        return view('tafseers.show', ['tafseer' =>  $tafseer]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Tafseer $tafseer)
    {
        return view('tafseers.edit',compact('tafseer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tafseer $tafseer)
    {
        $request->validate([
            'name' => 'required',
            'datasurah_id' => 'required',
            'youtubeId' => 'required'
           
        ]);
        $tafseer->name = $request->name;
        $tafseer->youtubeId = $request->youtubeId;
        $tafseer->datasurah_id = $request->datasurah_id;
        $tafseer->save();
       // $tafseer->update($request->all());
        return redirect()->route('tafseers.index');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tafseer $tafseer)
    {
        $tafseer->delete();
        return back();
    }
}
