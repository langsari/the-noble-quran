<?php

use App\http\Controllers\HomeController;
use App\Http\Controllers\surahController;

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
    return view('welcome');
});

Route::get('home/index',[HomeController::class,'index']);



Route::get('/fatihah', function () {
    return view('fatihah');
});


