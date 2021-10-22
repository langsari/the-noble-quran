<?php

namespace App\Http\Controllers;

use App\Admin;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class AdminController extends Controller
{
    function check(Request $request){
        $request->validate([
            'email'=>'required|email|exists:admins,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This Email is not exist'
        ]);

        $creds = $request->only('email','password');

        if(Auth::guard('admin')->attempt($creds) ){
            return redirect()->route('admin.home');
        }else{
            return redirect()->route('admin.login')->with('fail','Incorrect credentials');
        }
   }

   function logout(){
       Auth::guard('admin')->logout();
       return redirect('/');
   }

   function index(){
        $users = User::all();
        // dd($users);
        return view('dashboard.admin.home',['users'=>$users]);
   }
}
