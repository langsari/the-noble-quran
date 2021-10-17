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


#################################      Admin section        #######################################

Route::group(['prefix' => 'admin'],function () {

                Auth::routes();
        }
);
Route::get('/dashboard', 'HomeController@index')->name('home')->middleware('auth');;

#################################      End Admin section        #######################################



#################################      prefix Form mlti Lang        #######################################


Route::group([
                'prefix' => LaravelLocalization::setLocale(),
                'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
            ], function () {



    #################################      Home_Page Of our website section        #######################################

    Route::get('/', [HomeController::class,'homePage'])->name('homePage');

    #################################      End Home_Page Of our website section    #######################################



    #################################      AL-quran section        #######################################

    Route::group(
                ['prefix' => 'alquran'],
                function () {



        #################################      Home page AL-quran section        #######################################

        Route::get('/', function () { return view('Al_quran.home'); })->name('Al_quran.home');

        #################################      Home page AL-quran section        #######################################




        #################################      Check Current lang then decide wich method to call en or th         #######################################

        if (LaravelLocalization::getCurrentLocale() === 'th') {

                #################################      method showTh Means show in thai style         #######################################

                Route::get('/surah/{id}', [AyatController::class, 'showTh'])->middleware('CheckSurahId')->name('surah');

            } else {

                #################################      method showTh Means show in Eng style         #######################################

                Route::get('/surah/{id}', [AyatController::class, 'showEn'])->middleware('CheckSurahId')->name('surah');
            }
        }




    );
    #################################      End AL-quran section        #######################################






}); //  End prefix Form mlti Lang






