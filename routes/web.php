<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuranController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuransController;
use App\Http\Controllers\TafseersController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SearchuserController;
use App\Http\Controllers\ApprovalController;
use App\Http\Controllers\StaffController;

use App\Http\Controllers\ManageUserController;
use App\Http\Controllers\ManageQuranController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\QurantafseerController;


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
//index
Route::get('/', function () {
return view('quran.home');
});

//ontology
Route::get('/ontology', function () {
    return view('quran.ontology');
});

//holyQuran
Route::get('/holyQuran', function () {
    return view('quran.holyQuran');
});

//auth
Auth::routes();

Route::get ('/home' ,[HomeController::class, 'index'])->name('home');
Route::get ('admin/adminHome',[HomeController::class,'adminHome'])->name('admin.home')->middleware('is_admin');

//visitor
Route::get('/', [QuransController::class, 'homepage'])->name('homepage');
Route::get('/arabic{datasurah}', [QuransController::class, 'arabic'])->name('arabic');
Route::get('/quran/tafseer_home', [QuransController::class, 'tafseer_home'])->name('tafseer_home');
Route::get('/quran/tafseer_detail{data}', [QuransController::class, 'tafseer_detail'])->name('tafseer_detail');

//visitor
Route::get('/ontology', [QuransController::class, 'ontologypage'])->name('ontologypage');

//adminhome
Route::get ('thai/index',[HomeController::class,'adminhome'])->name('adminhome')->middleware('is_admin');

//simple search
Route::get('/search',[SearchController::class, 'search'])->name('web.search');
Route::get('/find',[SearchController::class, 'find'])->name('web.find');

//adminmanagenote
Route::get ('admin/managenote',[AdminController::class,'managenote'])->name('managenote');

//enduser
Route::get('enduser/homeuser',[QuranController::class, 'homeuser'])->name('homeuser');
Route::get('/surah{datasurah}', [QuranController::class, 'surah'])->name('surah');
Route::get('/enduser/tafseer_homeuser', [QuranController::class, 'tafseer_homeuser'])->name('tafseer_homeuser');
Route::get('/enduser/tafseer_detailuser{data}', [QuranController::class, 'tafseer_detailuser'])->name('tafseer_detailuser');

////simple search end user
Route::get('/searchuser',[SearchuserController::class, 'searchuser'])->name('web.searchuser');
Route::get('/findsearch',[SearchuserController::class, 'findsearch'])->name('web.findsearch');

//staff
Route::get ('thai/index',[StaffController::class,'staffhome'])->name('staffhome')->middleware('is_admin');
Route::get ('staff/viewstatus',[StaffController::class,'viewstatus'])->name('viewstatus');

//approval
Route::get ('thai/index',[ApprovalController::class,'approvalhome'])->name('approvalhome')->middleware('is_admin');
Route::get ('approval/approvalstatus',[ApprovalController::class,'approvalstatus'])->name('approvalstatus');

//tafseers
Route::resource('tafseers','TafseersController');

//adminmanageuser

Route::resource('user','ManageUserController');

//adminmanageQuran
Route::resource('thai','ManageQuranController');


//note
Route::resource('notes','NoteController');

//approveVDOtafseer
Route::get('approval/showvdotafseer',[ApprovalController::class,'showvdotafseer'])->name('showvdotafseer');
Route::get('/approvedvdotafseer/{id}',[ApprovalController::class,'approvedvdotafseer']);
Route::get('/cancledvdotafseer/{id}',[ApprovalController::class,'cancledvdotafseer']);

//Qurantafseer
Route::resource('qurantafseers','QurantafseerController');

//approveQurantafseer
Route::get('approval/showtafseer',[ApprovalController::class,'showtafseer'])->name('showtafseer');
Route::get('/approvedtafseer/{id}',[ApprovalController::class,'approvedtafseer']);
Route::get('/cancledtafseer/{id}',[ApprovalController::class,'cancledtafseer']);

//approveQuran
Route::get('approval/showquran',[ApprovalController::class,'showquran'])->name('showquran');
Route::get('/approvedquran/{id}',[ApprovalController::class,'approvedquran']);
Route::get('/cancledquran/{id}',[ApprovalController::class,'cancledquran']);



