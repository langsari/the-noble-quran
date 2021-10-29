<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\User;

class AdminController extends Controller
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

    public function managequran($id){
        

        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
         //function for ayat arabic
      return view('admin.managequran',compact('datas','arabics','datasurah'));
  
    }
    public function manageuser(){
        

        $user = User::all();
     
         //function for ayat arabic
      return view('admin.manageuser',compact('user'));
  
    }
    public function managetafseer(){
        
        // $users = User::join('posts', 'users.id', '=', 'posts.user_id')
        // ->get(['users.*', 'posts.descrption']);
     
      $tafseer = Tafseer::with('data')->get();
    //
    //return dd($tafseer->toArray());
       // $datasurah = Datasurah::with('tafseer')->find($id);
     
         //function for ayat arabic
      return view('admin.managetafseer',compact('tafseer'));
  
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function managenote(){
        

      return view('admin.managenote');
  
    }
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
