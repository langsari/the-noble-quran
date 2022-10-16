<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Thai;
class ManageQuranController extends Controller
{
    
    public function index() {
        $thais = Thai::paginate(10);
        return view('thai.index', compact('thais'));
    }

    public function show(Thai $thai) {
        return view('thai.show', ['thai' =>  $thai]);
    }
    
    public function create() {
        return view('thai.create');
    }

    public function edit(Thai $thai) {
        return view('thai.edit', compact('thai'));
    }

    public function update(Request $request, Thai $thai) {
        $request->validate([
            'datasurah_id' => 'required',
            'Text' => 'required',
            'audio' => 'required',
            'ayat' => 'required'
            // 'description' => 'required'
        ]);
        $thai->datasurah_id = $request->datasurah_id;
        $thai->Text = $request->Text ;
        $thai->audio = $request->audio;
        $thai->ayat = $request->ayat ;
        $thai->status='รอตรวจสอบ';

      
        $thai->save();
        return redirect()->route('thai.index');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'datasurah_id' => 'required',
            'Text' => 'required',
            'audio' => 'required',
            'ayat' => 'required'
            // 'description' => 'required'
        ]);

        Thai::create($data);

        return redirect()->route('thai.index')->with('success', 'Thai has been added!');
    }

    public function destroy(Thai $thai) {
        $thai->delete();
        return back();
    }
}
