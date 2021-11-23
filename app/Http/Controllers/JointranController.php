<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class JointranController extends Controller
{
    public function index()
    {
        $tran = DB::table('arabics')
        ->join('thais','thais.id','=','arabics.id')
        //->join('th_thai','th_thai.index','=','arabicquran.index')
        ->select('arabics.id', 'arabics.text','thais.text')
        //->where('arabic.index','=',$index_id)
        ->get();
        //return dd($tran);
        //->first();
        return view ('join.jointran',compact('tran'));
        //return view ('join.jiontran' , compac(tran));



       /* $users = DB::table('profile_information')
        ->join('users', 'users.rec_id', '=', 'profile_information.rec_id')
        ->select('profile_information.*', 'users.*')
        ->where('profile_information.rec_id','=',$rec_id)
        ->first();
        return view('quran.nav');*/
    }
}
