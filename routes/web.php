<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TypeaheadAutocompleteController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JointableController;
use App\Http\Controllers\JoinTranslationController;
use App\Http\Controllers\DetailController;

use App\Http\Controllers\exController;
use App\Http\Controllers\Jointrancontroller;
use App\Http\Controllers\QuranController;
use App\Http\Controllers\CauseController;


use App\Http\Controllers\QuransController;
use App\Http\Controllers\TafseersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchuserController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\StaffController;
//use App\Http\Controllers\MquranController;
use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ManageQuranController;

use App\Http\Controllers\NoteController;
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



//Route::resource('posts',PostController::class);
//Route::resource('posts','PostController');

//posts
// Route::get('posts',[PostController::class,'index'])->name('posts.index');
// Route::post('posts',[PostController::class,'store'])->name('posts.store');
// Route::get('posts/create ',[PostController::class,'create'])->name('posts.create');
// Route::get('posts/{post} ',[PostController::class,'show'])->name('posts.show');
// Route::put('posts/{post}',[PostController::class,'update'])->name('posts.update');
// Route::delete('posts/{post}',[PostController::class,'destroy'])->name('posts.destroy');
// Route::get('posts/{post}/edit',[PostController::class,'edit'])->name('posts.edit');



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

Route::get ('/home' ,[HomeController::class, 'index'])->name('home');
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
//Route::get('join/jointran', [JointranController::class, 'index']);

//show q text x tran
Route::get('/', [QuransController::class, 'homepage']);
//Route::get('/arabic{datasurah}', [QuransController::class, 'arabic'])->name('arabic');
//Route::get('/tran{arabics}', [QuransController::class, 'tran'])->name('tran');
 //Route::get('/arabic/{datasurah}/tafseer_detail/{data}', function (Arabic $datasurah, Tafseer $data) {
//   //
 //})->name('quran.detail');

Route::get('quran/home', [QuransController::class, 'homepage'])->name('homepage');
Route::get('/arabic{datasurah}', [QuransController::class, 'arabic'])->name('arabic');
Route::get('/quran/tafseer_home', [QuransController::class, 'tafseer_home'])->name('tafseer_home');
Route::get('/quran/tafseer_detail{data}', [QuransController::class, 'tafseer_detail'])->name('tafseer_detail');
//Route::get('quran/tafseer_vdo', [QuransController::class, 'tafseer_vdo'])->name('tafseer_vdo');

// Route::get('/quran/tafseer_home', [QuransController::class, 'tafseer_home'])->name('tafseer_home');
// Route::get('/quran/tafseer_detail{data}', [QuransController::class, 'tafseer_detail'])->name('tafseer_detail');

Route::get('quran/navbar', [QuransController::class, 'navbar'])->name('navbar');
Route::get('quran/data', [QuranController::class, 'index']);
Route::get('quran/join_surah', [JoinTranslationController::class, 'index']);
//Route::get('quran/home', [JoinTranslationController::class, 'index']);


//Route::get ('admin/menu' ,[AdminController::class, 'adminindex'])->name('adminindex');

//Test using model
Route::get('/qurans/index{datasurah}', [QuranController::class, 'index']);

//Route::get('/alls/{datasurah}', [QuranController::class, 'alls'])->name('alls');

//Route::get ('admin/adminHome' ,[AdminController::class, 'adminhome'])->name('adminhome');

//Route role users
Route::get ('thai/index',[HomeController::class,'adminhome'])->name('adminhome')->middleware('is_admin');



Route::get ('admin/m.quran' ,[HomeController::class, 'adminmnquran'])->name('adminmnquran');

//search
// Route::get('/people', [SearchController::class, 'index']);
// Route::get('/people/simple', [SearchController::class, 'index'])->name('simple_search');
// Route::get('/people/advance',[SearchController::class, 'advance'])->name('advance_search');

//livesearch
// Route::get('/live_search', [LiveSearch::class, 'index']);
// Route::get('/live_search/action', [LiveSearch::class, 'action'])->name('live_search.action');

//simple search
Route::get('/search',[SearchController::class, 'search'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');

//jointable
Route::get('join_table', [JointableController::class, 'index']);

//posts
Route::resource('posts','PostController');

//dropdown
// Route::get('causes_cat', 'CauseController@index');
// Route::get('GetSubCatAgainstMainCatEdit/{id}', 'CauseController@GetSubCatAgainstMainCatEdit');

//new dropdown X detail
// Route::get('quran/detail',[QuransController::class, 'index'])->name('causes_cat');
// Route::get('GetSubCatAgainstMainCatEdit/{id}', [QuransController::class, 'GetSubCatAgainstMainCatEdit'])->name('sub.dropdown');


Route::get ('/managequran{datasurah}',[AdminController::class,'managequran'])->name('managequran');
//Route::get ('admin/manageuser',[AdminController::class,'manageuser'])->name('manageuser');
Route::get ('admin/managetafseer',[AdminController::class,'managetafseer'])->name('managetafseer');
Route::get ('admin/managenote',[AdminController::class,'managenote'])->name('managenote');
Route::get ('admin/editquran',[AdminController::class,'editquran'])->name('editquran');

//
Route::get('enduser/homeuser',[QuranController::class, 'homeuser'])->name('homeuser');
Route::get('/surah{datasurah}', [QuranController::class, 'surah'])->name('surah');
Route::get('/enduser/tafseer_homeuser', [QuranController::class, 'tafseer_homeuser'])->name('tafseer_homeuser');
Route::get('/enduser/tafseer_detailuser{data}', [QuranController::class, 'tafseer_detailuser'])->name('tafseer_detailuser');

////simple search end user
Route::get('/searchuser',[SearchuserController::class, 'searchuser'])->name('web.searchuser');
Route::get('/findsearch',[SearchuserController::class, 'findsearch'])->name('web.findsearch');

//staff
Route::get ('thai/index',[StaffController::class,'staffhome'])->name('staffhome')->middleware('is_admin');
Route::get ('/staffmanagequran{datasurah}',[StaffController::class,'staffmanagequran'])->name('staffmanagequran');
Route::get ('staff/staffmanagetafseer',[StaffController::class,'staffmanagetafseer'])->name('staffmanagetafseer');
Route::get ('staff/viewstatus',[StaffController::class,'viewstatus'])->name('viewstatus');

//approval
Route::get ('thai/index',[ApprovalController::class,'approvalhome'])->name('approvalhome')->middleware('is_admin');
Route::get ('/approvalmanagequran{datasurah}',[ApprovalController::class,'approvalmanagequran'])->name('approvalmanagequran');
Route::get ('approval/approvalmanagetafseer',[ApprovalController::class,'approvalmanagetafseer'])->name('approvalmanagetafseer');
Route::get ('approval/approvalstatus',[ApprovalController::class,'approvalstatus'])->name('approvalstatus');

//hl search
Route::get('user/typeahead_autocomplete', [TypeaheadAutocompleteController::class, 'index']);

Route::get('/typeahead_autocomplete/action', [TypeaheadAutocompleteController::class, 'action'])->name('typeahead_autocomplete.action');

//tafseers
Route::resource('tafseers','TafseersController');

//adminmanageuser

Route::resource('user','ManageUserController');

//adminmanageQuran
Route::resource('thai','ManageQuranController');

//designeditquran


//note
Route::resource('notes','NoteController');
