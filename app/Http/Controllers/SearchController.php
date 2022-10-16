<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;

class SearchController extends Controller
{
    function search(){

       
        // if( isset($_GET['query']) && strlen($_GET['query']) > 1){

        //     $search_text = $_GET['query'];
        //     $countries = DB::table('country')->where('Name','LIKE','%'.$search_text.'%')->paginate(2);
        //     // $countries->appends($request->all());
        //     return view('search',['countries'=>$countries]);
            
        // }else{
        //      return view('search');
        // }
        return view('search');
       
    }

    function find(Request $request){
            $request->validate([
              'query'=>'required|min:1'
           ]);
  
           $query = $request->input('query');

           $texts =  DB::table('datasurahs')
           ->join('arabics','arabics.datasurah_id', '=', 'datasurahs.id')
           ->join('thais', 'thais.id', '=', 'arabics.id')
        
           ->select('datasurahs.th_name','datasurahs.id','arabics.id', 'arabics.text','thais.Text','arabics.ayat','thais.datasurah_id')
      
                      ->where('arabics.text','LIKE','%'.$query.'%')
                     //->orWhere('id','<', 114)
                     // ->orWhere('thais.Text','like','%'.$search_text.'%')
                     ->orWhere('thais.Text','like','%'.$query.'%')
                     
                      ->orWhere('arabics.datasurah_id','like','%'.$query.'%')
                      //->orWhere('arabics.id','like','%'.$search_text.'%')
                      ->orWhere('datasurahs.th_name','like','%'.$query.'%')
                     
                    //   ->map(function ($row) use ($query) {
                    //     $row->input = preg_replace('/(' . $query . ')/i', "<b>$1</b>", $row->input);
                    //     return $row;
                    // })
                    
                      ->paginate(10);
                     //$texts = preg_replace('/(' . $query. ')/i', "<b>$1</b>", $searchres);
                //      echo '<br>
                //      <br><br><br><body>
                //      <input type="text" id="searchtxt" />
                //      <input type="button" value="search" onClick="replaceText();" id="highlightButton" />
                //      <p>
                       
                       
                //        ACM requires the copyright of all submissions to be assigned to the organization as 
                //        a condition of publishing the work.[2] Authors may post the documents on their own websites,
                //         but they are required to link back to the digital library</p>
                //     </body>
                    
                //    ';

                //  echo"<script>";
                //    function replaceText() {

                //      $("body").find(".highlight").removeClass("highlight");
                 
                //      var searchword = $("#searchtxt").val();
                 
                //      var custfilter = new RegExp(searchword, "ig");
                //      var repstr = "<span class='highlight'>" + searchword + "</span>";
                 
                //      if (searchword != "") {
                //          $('body').each(function() {
                //              $(this).html($(this).html().replace(custfilter, repstr));
                //          })
                //      }
                //  }
                //  echo "</script>";
                      //return dd($texts);
           


                     
            return view('search',['texts'=>$texts]);
            //return response()->view('your_view', compact('variableName'));
          //  return response()->view('search', compact('texts'));
             //return response()->json($texts);

                //   $countries =  Datasurah::whereHas('tran', function($query) use($search_text) {
          
        //     $query      ->where('text','LIKE','%'.$search_text.'%');})
        //              //->orWhere('id','<', 114)
        //               ->orWhere('th_name','like','%'.$search_text.'%')->get();
        //              // ->orWhere('arabics.id','like','%'.$search_text.'%')
        //               //->paginate(10);
        //              //return dd($countries);
        //     return view('search',['countries'=>$countries]);
//             $teachers = Teacher::whereHas('student', function($query) use($term) {
//     $query->where('student_name', 'like', '%'.$term.'%');
// })->orWhere('teacher_name','LIKE','%'.$term.'%')->orderBy($order, 'asc')->get();


// $name = Input::get('q');
// // or this option  
// //$name = $request->input('q');

// $tafseers = DB::table('tafseers')           
//     ->select('tafseers.*')              
//     ->where('tafseers.name' , 'like', '%'.$name.'%') //Error in this line   

// return view('tafseer',compact('tafseers'));
//     }
}


}