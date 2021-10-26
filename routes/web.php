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
use App\Http\Controllers\AdminController;
use App\Http\Controllers\NasihaController;

#################################      prefix Form mlti Lang        #######################################


Route::group([
                'prefix' => LaravelLocalization::setLocale(),
                'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
            ], function () {


                Auth::routes();


#################################      User  section        #######################################

    Route::prefix('user')->name('user.')->group(function(){
        // guest to check First if u guest or not
        Route::middleware(['guest','PreventBackHistory'])->group(function(){

            Route::view('/login','dashboard.user.login')->name('login');
            Route::view('/register','dashboard.user.register')->name('register');
            Route::POST('/create',[UserController::class,'create'])->name('create');
            Route::POST('/check',[UserController::class,'check'])->name('check');

        });

            // auth to check First if u auth or not
        Route::middleware(['auth','PreventBackHistory'])->group(function(){

            Route::GET('/home',[UserController::class,'index'])->name('home');
            Route::POST('/logout',[UserController::class,'logout'])->name('logout');

        });
    });

#################################      End Usersection        #######################################

#################################      Admin section                  #######################################

    Route::prefix('admin')->name('admin.')->group(function(){
        // guest to check First if u guest or not
        Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){

            Route::view('/login','dashboard.admin.login')->name('login');
            Route::POST('/check',[AdminController::class,'check'])->name('check');

        });

            // guest to check First if u auth or not
        Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){

            Route::GET('/home',[AdminController::class,'index'])->name('home');
            Route::POST('/logout',[AdminController::class,'logout'])->name('logout');

        });
    });

#################################      End Admin section        #######################################





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


    #################################      Nasiha section        #######################################

    Route::prefix('nasiha')->group(function () {


        Route::get('/',[NasihaController::class,'index'])->name('nasiha.index');
        Route::get('/{id}/show',[NasihaController::class,'show'])->name('nasiha.show');
        Route::get('/create',[NasihaController::class,'create'])->name('nasiha.create');
        Route::POST('',[NasihaController::class,'store'])->name('nasiha.store');
        Route::GET('{id}/approve',[NasihaController::class,'approve'])->name('nasiha.approve');
        Route::GET('{id}/unapprove',[NasihaController::class,'unApprove'])->name('nasiha.unApprove');
        Route::GET('{id}/detele',[NasihaController::class,'detele'])->name('nasiha.detele');





    });

    #################################      End Nasiha section        #######################################


}); //  End prefix Form mlti Lang








