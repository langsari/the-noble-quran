<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\Models\Translation;
use Illuminate\Support\Facades\DB;
class JoinTranslationController extends Controller

{
    //{
    public function index()
    {             
        //$daftarsurah = Translation::all();
        
        //$tran = DB::table('arabicquran')
        $daftarsurah = DB::table('daftarsurah')
        ->select('index','surah_indonesia')
        ->get();

        return view('quran.join_surah',compact('daftarsurah'));
         	/*Above code will produce following query

        Select 
        	`country`.`country_name`, 
        	`state`.`state_name`, 
        	`city`.`city_name` 
        from `country` 
        inner join `state` 
        	on `state`.`country_id` = `country`.`country_id` 
        inner join `city` 
        	on `city`.`state_id` = `state`.`state_id`

            	$data = Country::join('state', 'state.country_id', '=', 'country.country_id')
              		->join('city', 'city.state_id', '=', 'state.state_id')
              		->get(['country.country_name', 'state.state_name', 'city.city_name']);

                      $data = Translation::join('arabic_quran', 'arabic_quran.Surah_ID', '=', 'thai_translation.Surah_ID')
              		->join('thai_translation', 'thai_translation.Ayah_ID', '=', 'arabic_quran.Ayah_ID')
              		->get(['surah.surah_name', 'quran.Text', 'translation.text']);
        */
        
        
       
    }
}

?>