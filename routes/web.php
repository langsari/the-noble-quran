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

Route::get('/', function () {
    return view('index');});

        Route::view('/home', 'home');

        Route::view('/surah', 'surah');

        Route::view('/salawat', 'salawat');
        
        Route::view('/hadith', 'hadith');

        Route::view('/about', 'about');



 
