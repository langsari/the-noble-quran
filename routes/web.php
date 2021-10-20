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
use App\Http\Controllers\ayatController;


Route::get('/', function () {
    return view('index');});


        Route::view('/quran', 'quran');

        Route::get('/surah/{id}',[ayatController::class,'showSurah']);

        Route::view('/salawat', 'salawat');
        
        Route::view('/hadith', 'hadith');

        Route::view('/about', 'about');



 

Auth::routes();

Route::get('/home', 'HomeController@index')->name('.home');
