<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;

class HighlightController extends Controller
{
    public function search_keywords(Request $req)
{
    // $query = $request->input('query');

    // $texts =  DB::table('datasurahs')
    // ->join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
    // ->join('thais', 'thais.id', '=', 'arabics.id')
 
    // ->select('datasurahs.th_name','datasurahs.id','arabics.id', 'arabics.text','thais.Text','arabics.ayat')
    // // $arabics = Datasurah::with('arabic.thais')->find($id);
    // // $tafseer = Tafseer::with('data')->get();
    //            ->where('arabics.text','LIKE','%'.$query.'%')
    //           //->orWhere('id','<', 114)
    //           // ->orWhere('thais.Text','like','%'.$search_text.'%')
    //           ->orWhere('thais.Text','like','%'.$query.'%')
              
    //            ->orWhere('arabics.datasurah_id','like','%'.$query.'%')
    //            //->orWhere('arabics.id','like','%'.$search_text.'%')
    //            ->orWhere('datasurahs.th_name','like','%'.$query.'%')
              
    //            ->paginate(10);

$title = $req->term; 
//$data = DB::table('blog')->where('title', 'like', '%' . $title . '%')

$data =DB::table('datasurahs')
    ->join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
    ->join('thais', 'thais.id', '=', 'arabics.id')
 
    ->select('datasurahs.th_name','datasurahs.id','arabics.id', 'arabics.text','thais.Text','arabics.ayat')
    // $arabics = Datasurah::with('arabic.thais')->find($id);
    // $tafseer = Tafseer::with('data')->get();
               ->where('arabics.text','LIKE','%'.$title.'%')
              //->orWhere('id','<', 114)
              // ->orWhere('thais.Text','like','%'.$search_text.'%')
              ->orWhere('thais.Text','like','%'.$title.'%')
              
               ->orWhere('arabics.datasurah_id','like','%'.$title.'%')
               //->orWhere('arabics.id','like','%'.$search_text.'%')
               ->orWhere('datasurahs.th_name','like','%'.$title.'%')
->take(10)->get();
foreach ($data as $key => $value) {
echo '<li><a href='.url('news/'.$data[$key]->category.'/'.$data[$key]->slug).'>'.str_replace(strtolower($t),
"<b>".strtolower($t)."</b>", strtolower($data[$key]->title)).'</a></li>';
}
}
}
