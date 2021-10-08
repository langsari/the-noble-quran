<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Datasurah;

class AdminController extends Controller
{
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
    
}



