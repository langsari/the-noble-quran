<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\MquranController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\JoinTranslationController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\exController;
use App\Http\Controllers\Jointrancontroller;
use App\Http\Controllers\QuranController;

use App\Http\Controllers\QuransController;
use App\Http\Controllers\TafseersController;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
return view('quran.home');
});

//Route::get('/', function () {
  //return view('welcome');
  //});



Route::resource('posts',PostController::class);
//Route::resource('posts','App\Http\Controllers\PostController');
//Route::resource('mqurans',MquranController::class);

//Route::resource('tafseer',TafseerController::class);


/*Route::get('/',[PageController::class,'index']);

Route::get('/uploadpage',[PageController::class,'uploadpage']);

Route::post('/uploadtafseer',[PageController::class,'store']);


Route::get('showtafseer',[PageController::class,'show']);
 
Route::get('/download/{file}',[PageController::class,'download']);

Route::get('/view/{is}',[PageController::class,'viewtafseer']);

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/


Auth::routes();

Route::get ('/home' ,[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get ('admin/adminHome',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');

//Route::get('join_table', [JointableController::class, 'index']);
//Route::get('quran/v_translation', [JoinTranslationController::class, 'index']);
//Route::get('quran/detail', [DetailController::class, 'index']);

//Route::get('admin/index',[AdminController::class,'index']);

Route::get('/', function () {
  return redirect()->route('homepage');
  });

//detail
Route::get('quran/nav', [DetailController::class, 'index']);

//่join q text w q tran
Route::get('join/jointran', [JointranController::class, 'index']);

//show q text x tran
Route::get('/', [QuransController::class, 'homepage']);
Route::get('/arabic{datasurah}', [QuransController::class, 'arabic'])->name('arabic');
 //Route::get('/arabic/{datasurah}/tafseer_detail/{data}', function (Arabic $datasurah, Tafseer $data) {
//   //
 //})->name('quran.detail');

Route::get('quran/home', [QuransController::class, 'homepage'])->name('homepage');
Route::get('quran/tafseer_vdo', [QuransController::class, 'tafseer_vdo'])->name('tafseer_vdo');

Route::get('/quran/tafseer_home', [QuransController::class, 'tafseer_home'])->name('tafseer_home');
Route::get('/quran/tafseer_detail{data}', [QuransController::class, 'tafseer_detail'])->name('tafseer_detail');

Route::get('quran/navbar', [QuransController::class, 'navbar'])->name('navbar');
Route::get('quran/data', [QuranController::class, 'index']);
Route::get('quran/join_surah', [JoinTranslationController::class, 'index']);
//Route::get('quran/home', [JoinTranslationController::class, 'index']);


//Route::get ('admin/menu' ,[AdminController::class, 'adminindex'])->name('adminindex');

//Test using model
Route::get('/qurans/index{datasurah}', [QuranController::class, 'index']);
//Route::get('/alls/{datasurah}', [QuranController::class, 'alls'])->name('alls');

//Route::get ('admin/adminHome' ,[AdminController::class, 'adminhome'])->name('adminhome');

Route::get ('admin/adminHome',[HomeController::class,'adminhome'])->name('adminhome')->middleware('is_admin');
Route::get ('admin/approvalHome',[HomeController::class,'approvalhome'])->name('approvalhome')->middleware('is_admin');
Route::get ('admin/staffHome',[HomeController::class,'staffhome'])->name('staffhome')->middleware('is_admin');


Route::get ('admin/m.quran' ,[HomeController::class, 'adminmnquran'])->name('adminmnquran');