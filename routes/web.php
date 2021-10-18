<?php

use App\Http\Controllers\HomeController;

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
    return view('main');
});

Route::get('/login', function () {
    return view('login');
});


/*
Auth::routes();

Route::get('/userhome', 'HomeController@index')->name('userhome');
Route::get('/adminhome',[HomeController::class,'adminhome'] )->name('admin.home')->middleware('is_admin');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
