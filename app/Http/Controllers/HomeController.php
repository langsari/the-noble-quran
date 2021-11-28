<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Qurantafseer;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminhome(){
       // $datasurahs = Datasurah::all();
      
        //return dd($datasurahs);
        // return view('admin.adminHome', [
        //     'datasurahs' => $datasurahs
        // ]);

        // $thais = Thai::paginate(10);
        // return view('thai.index', compact('thais'));
        if(Auth::id()){
            $userid=Auth::user()->id;
            $tafseers = qurantafseer::where('user_id',$userid)->get();
            return view('qurantafseers.index',compact('tafseers'));
        }
    }
    public function adminmnquran(){
        //$datasurahs = Datasurah::paginate(20);
        //return dd($datasurahs);
        return view('admin.adminHome');
    }
    public function approvalhome()
    {
        $datasurahs = Datasurah::paginate(20);
        return view('thai.index', [
            'datasurahs' => $datasurahs
        ]);
    }
    public function staffhome()
    {
        $datasurahs = Datasurah::paginate(20);
        return view('thai.index', [
            'datasurahs' => $datasurahs
        ]);
    }
  
}
