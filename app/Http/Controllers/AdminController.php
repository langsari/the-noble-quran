<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\User;
use App\Models\Note;

use Illuminate\Support\Facades\DB;

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
        //return dd($arabics->toArray());
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
        
        $data = Note::paginate(5);
        return view('admin.managenote', compact('data'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
    //   return view('admin.managenote');
  
    }
     public function editquran(){
       //  $arabics = Datasurah::with('arabic.thais')->find($arabic_id);
        //return dd($arabics->toArray());

     //  return view('admin.editquran',compact('arabics'));
    return view('admin.editquran');
    
    //   }

    // $arabics = DB::table('datasurahs')
    // ->join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
    // ->join('thais', 'thais.arabic_id', '=', 'arabics.arabic_id')
 
    // ->select('datasurahs.th_name','datasurahs.id','arabics.arabic_id', 'arabics.text','thais.Text','arabics.ayat')
    // //->where('thais.arabic_id', '=', 'arabics.arabic_id')
    // ->get();
   // return dd($arabics->toArray());
    //return view('admin.editquran',compact('arabics'));
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
