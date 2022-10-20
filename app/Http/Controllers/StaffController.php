<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\User;

class StaffController extends Controller
{
    public function staffhome()
    {
        $datasurahs = Datasurah::paginate(20);
        return view('staff.staffHome', [
            'datasurahs' => $datasurahs
        ]);
    }
    public function staffmanagequran($id){
        

        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
         //function for ayat arabic
      return view('staff.managequran',compact('datas','arabics','datasurah'));
  
    }
    public function staffmanagetafseer(){
        
        // $users = User::join('posts', 'users.id', '=', 'posts.user_id')
        // ->get(['users.*', 'posts.descrption']);
     
      $tafseer = Tafseer::with('data')->get();
    //
    //return dd($tafseer->toArray());
       // $datasurah = Datasurah::with('tafseer')->find($id);
     
         //function for ayat arabic
      return view('staff.managetafseer',compact('tafseer'));
  
    }
    public function viewstatus()
    {
    
        return view('staff.viewstatus');
    }
}
