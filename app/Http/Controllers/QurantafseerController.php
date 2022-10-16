<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\Qurantafseer;

class QurantafseerController extends Controller
{
    public function index()
    // $tafseers =Tafseer::all();
 {
 
     if(Auth::id()){
         $userid=Auth::user()->id;
         $tafseers = Qurantafseer::where('user_id',$userid)->get();
         return view('qurantafseers.index',compact('tafseers'));
     }
   
     // {
     //     //$tafseer = Tafseer::with('data')->get();
     //     $tafseers = Tafseer::paginate(5);
     //       return view('tafseers.index',compact('tafseers'));
  }
 
 
 
     /**
      * Show the form for creating a new resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function create()
     {
         return view('qurantafseers.create');
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
            'datasurah_id' => 'required',
             'name' => 'required',
             'qurantafseer' => 'required',
             'resource' => 'required',
            
             'arabic_id' => 'required'
            
         ]);
 
         //Tafseer::create($data);
 
         $data = new Qurantafseer;
         $data->datasurah_id=$request->datasurah_id;
         $data->name=$request->name;
         $data->qurantafseer=$request->qurantafseer;
         $data->resource=$request->resource;
        
         $data->arabic_id=$request->arabic_id;
         $data->status='รอตรวจสอบ';
         if(Auth::id()){
           
             $data->user_id=Auth::user()->id;
         }
         // 
         $data->save();
        // Tafseer::create($request->all());
 
         return redirect()->route('qurantafseers.index')->with('success', 'เพิ่มตัฟซีรสำเร็จ');
     }
 
     /**
      * Display the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function show(Qurantafseer $qurantafseer)
     {
         return view('qurantafseers.show', ['qurantafseer' =>  $qurantafseer]);
     }
 
     /**
      * Show the form for editing the specified resource.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function edit(Qurantafseer $qurantafseer)
     {
         return view('qurantafseers.edit',compact('qurantafseer'));
     }
 
     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, Qurantafseer $qurantafseer)
     {
         $request->validate([
            'name' => 'required',
            'qurantafseer' => 'required',
            'resource' => 'required',
            'datasurah_id' => 'required',
             'arabic_id' => 'required'
           
            
         ]);
      
         $qurantafseer->name=$request->name;
         $qurantafseer->qurantafseer=$request->qurantafseer;
         $qurantafseer->resource=$request->resource;
         $qurantafseer->datasurah_id=$request->datasurah_id;
         $qurantafseer->arabic_id=$request->arabic_id;
         $qurantafseer->status='รอตรวจสอบ';

         $qurantafseer->save();
        // $tafseer->update($request->all());
         return redirect()->route('qurantafseers.index');
     }
     
 
     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(Qurantafseer $qurantafseer)
     {
         $qurantafseer->delete();
         return back();
     }  // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
