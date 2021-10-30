<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QurantextController extends Controller
{
    public function index(){

        $title = 'Welcome to my website';
        $description = 'This is the test to print text';

        $data = [
            'product1' => 'Apple',
            'product2' => 'Max'
        ];
         return view('home.qurantext', 
         compact('title', 'description'));

        
    }

}
