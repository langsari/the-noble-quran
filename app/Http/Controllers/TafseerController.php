<?php

namespace App\Http\Controllers;

use App\Models\Tafseer;
use Illuminate\Http\Request;


class TafseerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tafseer.index');
    }
    public function uploadtafseer()
    {
        return view('tafseer.tafseers');
    }

    public function view($id)
    {
        $data=Tafseer::find($id);
 
        return view('viewtafseer',compact('data'));
 
 
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
        //{
 
            $data=new tafseer();
        
          
                $file=$request->file;
                 
             $filename=time().'.'.$file->getClientOriginalExtension();
 
                 $request->file->move('assets',$filename);
 
                 $data->file=$filename;
 
 
                 $data->name=$request->name;
                 $data->description=$request->description;
 
                 $data->save();
                 return redirect()->back();
 
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tafseer  $tafseer
     * @return \Illuminate\Http\Response
     */
    public function show(Tafseer $tafseer)
    {
        $data=tafseer::all();
   	return view('showtafseer',compact('data'));
   }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tafseer  $tafseer
     * @return \Illuminate\Http\Response
     */
    public function edit(Tafseer $tafseer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tafseer  $tafseer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tafseer $tafseer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tafseer  $tafseer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tafseer $tafseer)
    {
        //
    }
}
