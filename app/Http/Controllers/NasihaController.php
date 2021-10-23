<?php

namespace App\Http\Controllers;

use App\Nasiha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NasihaController extends Controller
{
    //

    function index()
    {
        $nasihas = Nasiha::all();

        return view('Nasiha.index')->with('nasihas',$nasihas);


    }


    function create()
    {
        return view('Nasiha.create');


    }


    function store(Request $request)
    {
        $request->validate([
            'title'=> 'required|min:4|string',
            'description' => 'required|min:10|string'
        ]);

        $nasiha = new Nasiha();
        $nasiha->title = $request->title;
        $nasiha->description = $request->description;
        $nasiha->user_id =Auth::user()->id;
        $result = $nasiha->save();
        if($result){
            return redirect()->back()->with('success','Add Successfully');
        }else{
            return redirect()->back()->with('fail','Some thing went wrong');
        }



    }




    function show($id){

        $nasiha = Nasiha::find($id);
        return view('Nasiha.show')->with('nasiha',$nasiha);
    }
}
