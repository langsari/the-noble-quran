<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QurantextController extends Controller
{
    public function index(){

        

        $ayah1 = 'بِسْمِ ٱللَّهِ ٱلرَّحْمَٰنِ ٱلرَّحِيمِ';
        $ayah2 = 'ٱلْحَمْدُ لِلَّهِ رَبِّ ٱلْعَٰلَمِينَ';
        $ayah3 ='ٱلرَّحْمَٰنِ ٱلرَّحِيمِ';
        $ayah4 ='مَٰلِكِ يَوْمِ ٱلدِّينِ';
        $ayah5 ='إِيَّاكَ نَعْبُدُ وَإِيَّاكَ نَسْتَعِينُ';
        $ayah6 ='ٱهْدِنَا ٱلصِّرَٰطَ ٱلْمُسْتَقِيمَ';
        $ayah7 ='صِرَٰطَ ٱلَّذِينَ أَنْعَمْتَ عَلَيْهِمْ غَيْرِ ٱلْمَغْضُوبِ عَلَيْهِمْ وَلَا ٱلضَّآلِّينَ';
        
        
         return view('home.qurantext', 
         compact('ayah1', 'ayah2', 'ayah3', 'ayah4', 'ayah5', 'ayah6', 'ayah7'));

        
    }

}
