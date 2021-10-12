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


Route::group(['prefix' => 'admin'],function () {

Auth::routes();


    }
);


Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth');;



//  prefix Form mlti Lang
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {


    #################################      Home_Page section        #######################################

    Route::get('/', [HomeController::class, 'homePage'])->name('Home');



    #################################      End Home section        #######################################

    #################################      AL-quran section        #######################################

    Route::group(
        ['prefix' => 'alquran'],
        function () {


            Route::get('/', function () {
                return view('Al_quran.home');
            })->name('Al_quran.home');



            ////////                       \\\\\\\
            if (LaravelLocalization::getCurrentLocale() === 'th') {

                Route::get('/surah/{id}', [AyatController::class, 'showTh'])->middleware('CheckSurahId')->name('surah');
            } else {
                Route::get('/surah/{id}', [AyatController::class, 'showEn'])->middleware('CheckSurahId')->name('surah');
            }
        }




    );



    #################################      End AL-quran section        #######################################






}); //  End prefix Form mlti Lang




