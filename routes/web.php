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


Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {



    Route::get('/', function () {
        return view('home');
    })->name('home');




    if (LaravelLocalization::getCurrentLocale() === 'th') {

        Route::get('/surah/{id}', [AyatController::class, 'showTh'])->middleware('CheckSurahId');

    } else {
        Route::get('surah/{id}', [AyatController::class, 'showEn'])->middleware('CheckSurahId');
    }
});
