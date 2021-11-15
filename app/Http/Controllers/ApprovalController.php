<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\User;

class ApprovalController extends Controller
{
    public function approvalhome()
    {
        $datasurahs = Datasurah::paginate(20);
        //return dd($datasurahs->toArray());
        return view('approval.approvalHome', [
            'datasurahs' => $datasurahs
            
        ]);
    }
    public function approvalmanagequran($id){
        

        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
         //function for ayat arabic
      return view('approval.qurandetail',compact('datas','arabics','datasurah'));
  
    }
    public function approvalmanagetafseer(){
        
        // $users = User::join('posts', 'users.id', '=', 'posts.user_id')
        // ->get(['users.*', 'posts.descrption']);
     
      $tafseer = Tafseer::with('data')->get();
    //
    //return dd($tafseer->toArray());
       // $datasurah = Datasurah::with('tafseer')->find($id);
     
         //function for ayat arabic
      return view('approval.approvalmanagetafseer',compact('tafseer'));
  
    }
    public function approvalstatus(){
        

      return view('approval.approvalstatus');
  
    }
}
