<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    if(Auth::id()){
        $userid=Auth::user()->id;
        $tafseers = Tafseer::where('user_id',$userid)->get();
        return view('tafseers.index',compact('tafseers'));
    }
  
   
 }    /**
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
        $data = new Tafseer;
        $data->name=$request->name;
        $data->datasurah_id=$request->datasurah_id;
        $data->youtubeId=$request->youtubeId;
        $data->status='รอตรวจสอบ';
        if(Auth::id()){
          
            $data->user_id=Auth::user()->id;
        }
        // 
         $data->save();
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
        $tafseer->status='รอตรวจสอบ';

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
