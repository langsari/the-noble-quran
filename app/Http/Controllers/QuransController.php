<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Arabic;
use App\Models\Datasurah;
use App\Models\Thai;
use App\Models\Tafseer;
use App\Models\Qurantafseer;
use App\Models\Note;

use DB;

class QuransController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
        public function index() {
            $datat = DB::table('datasurahs')->get();
            return view('quran.detail')->with('datat', $datat);
        }
    
    
        public function GetSubCatAgainstMainCatEdit($id){
            echo json_encode(DB::table('arabics')->where('datasurah_id', $id)->get());
        }

        public function main()
    {
        $datasurahs = Datasurah::all();
        return view('quran.main', [
            'datasurahs' => $datasurahs
        ]);
        
    }
    

    public function homepage()
    {
        
            $datasurahs = Datasurah::all();
            //return dd($datasurahs);
            return view('quran.home', [
                'datasurahs' => $datasurahs
            ]);
        
    }

   


    public function arabic($id)

    { 
        $datas = Datasurah::all();
        $datasurah = Datasurah::with('tafseer')->find($id);
        $tafseers =Datasurah::with('qurantafseer')->find($id);
        $arabics = Datasurah::with('arabic.thais')->find($id);
       //
       
         //function for ayat arabic
        //  function format_arabic_number($number)
        //  {
        //      $ayat = 1;
        //      $arabic_number = array('٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩');
        //      $jum_karakter = strlen($number);
        //     $temp = "";
 
        //      for ($i =0; $i< $jum_karakter; $i++) {
        //          $char = substr($number, $i, 1);
        //          $temp .= $arabic_number[$char];
 
        //      }
        //      return '<span class="arabic_number">' .$temp. ' </span>';            
        //  } 
     
      
      return view('quran.detail',compact('datas','arabics','datasurah','tafseers'));
    //   [
    //    //'datasurahs' => $datasurahs,
    //    'arabics' => $arabics
    // ]);
    //     //    'ayats' => $ayats
    //     //]);
     // ->firstOrFail();

       // $plucked = $ayats->pluck('ayat.text', 'trans.text');
        
        //dd($arabics->toArray());
      
       //return dd($datasurahs);
       //return dd($arabics);
       //return view('test.detail', [
        //dd($ayats->toArray());
        //'ayats' => $ayats]);
    
    }
    



    public function tafseer_home()
    {
        
            $datasurahs = Datasurah::paginate(20);
           //return dd($datasurahs);
            return view('quran.tafseer_home', [
                'datasurahs' => $datasurahs
            ]);
        
    }
  

    public function tafseer_detail($id)
    {
        $tafseers = Datasurah::with('tafseer')->find($id);
      
        
       //dd($tafseers->toArray());
      
    
       
      return view('quran.tafseer_detail',compact('tafseers'));
        //    'ayats' => $ayats
        //]);
    }
  
    // public function detail()
    // {
    //     return view('quran.detail');
    // }
    // public function homepage()
    // {
    //     $surahs = DB::table('datasurahs')
    //     ->select('th_name')
    //     ->get();

    //     return view('quran.home',compact('surahs'));
    //     //return view('quran.home');
    // } 
    public function tafseer_vdo()
    {
        return view('quran.tafseer_vdo');
    }
    // public function tafseer_home()
    // {
    //     return view('quran.tafseer_home');
    // }
    // public function tafseer_detail()
    // {
    //     return view('quran.tafseer_detail');
    // }
    public function navbar()
    {
        return view('quran.navbar');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
