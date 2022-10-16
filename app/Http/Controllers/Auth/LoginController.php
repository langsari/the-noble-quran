<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
    $input = $request->all();

    $this->validate($request, [
        'email' => 'required|email',
        'password' => 'required'
    ]);

    if(auth()->attempt(array('email' => $input['email'],'password' => $input['password']))){
        if (auth()->user()->is_admin ==1 ){
            return redirect()->route('thai.index');
        }else if (auth()->user()->is_admin ==2 ){
            return redirect()->route('thai.index');
        }else if (auth()->user()->is_admin ==3 ){
            return redirect()->route('thai.index');
        }else {
            return redirect()->route('homeuser');
        }
    }else {
            return redirect()->route('login')->with('error','อีเมลล์หรือรหัสผ่านไม่ถูกต้อง');
        }
    }
}

