<?php

namespace App\Http\Controllers;

use App\Nasiha;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Query;
use Illuminate\Support\Facades\DB;
class NasihaController extends Controller
{
    //

    function index()
    {
        $nasihas = Nasiha::where('approved', 1)->get();

        return view('Nasiha.index')->with('nasihas', $nasihas);
    }


    function create()
    {
        return view('Nasiha.create');
    }


    function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:4|string',
            'description' => 'required|min:10|string',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        $imageName = time() . '.' . $request->img->extension();
        $request->img->move(public_path('post_img'), $imageName);

        $nasiha = new Nasiha();
        $nasiha->title = $request->title;
        $nasiha->description = $request->description;
        $nasiha->img = $imageName;
        $nasiha->user_id = Auth::user()->id;
        $result = $nasiha->save();
        if ($result) {
            return redirect()->back()->with('success', 'Add Successfully');
        } else {
            return redirect()->back()->with('fail', 'Some thing went wrong');
        }
    }




    function show($id)
    {

        $nasiha = Nasiha::find($id);
        return view('Nasiha.show')->with('nasiha', $nasiha);
    }

    function approve($id)
    {

        $nasiha = Nasiha::find($id);
        $nasiha->approved = 1;
        $nasiha->save();
        return redirect()->back()->with('approved', 'Post Appeoved Successfully');
    }

    function unApprove($id)
    {

        $nasiha = Nasiha::find($id);
        $nasiha->approved = 0;
        $nasiha->save();
        return redirect()->back()->with('fail', 'Post Unappeoved Successfully');
    }


    function detele($id)
    {


        $delete = DB::table('nasihas')->where('id', $id)->delete();
        if ($delete) {
            dd($delete);
            return redirect()->back()->with('suc', 'Post Appeoved Successfully');
        } else {
            return redirect()->back()->with('fai', 'Post Unappeoved Successfully');
        }
    }
}
