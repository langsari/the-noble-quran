<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Datasurah;

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
        $datasurahs = Datasurah::paginate(20);
        //return dd($datasurahs);
        return view('admin.adminHome', [
            'datasurahs' => $datasurahs
        ]);
    }
    public function adminmnquran(){
        //$datasurahs = Datasurah::paginate(20);
        //return dd($datasurahs);
        return view('admin.adminHome');
    }
    public function approvalhome()
    {
        $datasurahs = Datasurah::paginate(20);
        return view('admin.approvalHome', [
            'datasurahs' => $datasurahs
        ]);
    }
    public function staffhome()
    {
        $datasurahs = Datasurah::paginate(20);
        return view('admin.staffHome', [
            'datasurahs' => $datasurahs
        ]);
    }
}
