<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fatihahController extends Controller
{
    public function show(text_arabic){

        
 $fatihah=\DB::table('arabic')->where('text_arabic',$text_arabic)->first();
   
 return view(view:'fatihah',data['fatihah'->$fatihah]);
}
}
