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
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;

#################################      Admin section        #######################################



#################################      End Admin section        #######################################




#################################      prefix Form mlti Lang        #######################################


Route::group([
                'prefix' => LaravelLocalization::setLocale(),
                'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
            ], function () {


                Auth::routes();


#################################      User login section        #######################################

Route::prefix('user')->name('user.')->group(function(){
    // guest to check First if u guest or not
    Route::middleware(['guest','PreventBackHistory'])->group(function(){

        Route::view('/login','dashboard.user.login')->name('login');
        Route::view('/register','dashboard.user.register')->name('register');
        Route::POST('/create',[UserController::class,'create'])->name('create');
        Route::POST('/check',[UserController::class,'check'])->name('check');

    });

        // guest to check First if u auth or not
    Route::middleware(['auth','PreventBackHistory'])->group(function(){

        Route::view('/home','dashboard.user.home')->name('home');
        Route::POST('/logout',[UserController::class,'logout'])->name('logout');

    });
    });
#################################      End User login  section        #######################################





// Route::get('/home', 'HomeController@index')->name('home');


    #################################      Home_Page Of our website section        #######################################

    Route::get('/', [PageController::class,'index'])->name('homePage');

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








