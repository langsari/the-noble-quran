<?php

namespace App\Http\Controllers;

use App\Nasiha;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class UserController extends Controller
{

    function index()
    {
        $nasihas = Nasiha::where('user_id',Auth::user()->id)->get();
        return view('dashboard.user.home',['nasihas'=>$nasihas]);
    }


    function create(Request $request)
    {

        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users,email|unique:admins,email',
            'password'=>'required|min:5|max:30',
            'password_confirmation'=>'required|min:5|max:30|same:password'
        ]);

        $user = new User();
        $user->name  =$request->name;
        $user->email  =$request->email;
        $user->password  = Hash::make($request->password);
        $save = $user->save();

        if($save){
            return redirect()->back()->with('success','Register Successfully');
        }else{
            return redirect()->back()->with('fail','Some thing went wrong');
        }

    }

    function check(Request $request){
        //validate input
        $request->validate([
            'email'=>'required|email|exists:users,email',
            'password'=>'required|min:5|max:30',
        ],[
            'email.exists'=>'This Email is not exist'
        ]);

        $creds = $request->only('email','password');
        if(Auth::attempt($creds)){

            return redirect()->route('user.home');
        }else{
            return redirect()->route('user.login')->with('fail','Incorrect Email or Password');
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/');
    }


}
