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
use App\Http\Controllers\HomeController;

//  prefix Form mlti Lang
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {




#################################      Home section        #######################################

Route::get('/',[HomeController::class,'index'])->name('Home');









#################################      End Home section        #######################################

#################################      AL-quran section        #######################################

Route::group(['prefix' => 'alquran'],function()
    {


        Route::get('/', function () {
            return view('Al_quran.home');
        })->name('Al_quran.home');




        if (LaravelLocalization::getCurrentLocale() === 'th') {

            Route::get('/surah/{id}', [AyatController::class, 'showTh'])->middleware('CheckSurahId');

        } else {
            Route::get('surah/{id}', [AyatController::class, 'showEn'])->middleware('CheckSurahId');
        }

    }




);



#################################      End AL-quran section        #######################################






}); //  End prefix Form mlti Lang

