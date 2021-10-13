<?php
use App\Http\Controllers\quran_arController;

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


Route::get('/content', [quran_arController::class,'checkDb']);


/*Route::get('/in', function () {
    return view('in');
});*/

Route::get('/main', function () {
    return view('main');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/sidebar', function () {
    return view('sidebar');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



