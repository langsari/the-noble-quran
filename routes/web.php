<?php


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

use App\Ayat;
use App\Http\Controllers\AyatController;

Route::get('/', function () {
    return view('home');

})->name('home');



Route::get('surah/thi/{id}',[AyatController::class,'show'])->middleware('CheckSurahId');

Route::get('/surah/{id}', function($id){
    return view("surah")->with('id',$id);
})->middleware('CheckSurahId');
