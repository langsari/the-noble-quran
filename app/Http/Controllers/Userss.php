<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Userss extends Controller
{
    public function index(){
        return view('user.index');
    }
}
