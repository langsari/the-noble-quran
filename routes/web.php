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
use App\Http\Controllers\ayatController;

use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;






Route::get('/', function () {
    return view('index');});


        Route::view('/quran', 'quran');

        Route::get('/surah/{id}',[ayatController::class,'showSurah']);

        Route::view('/salawat', 'salawat');
        
        Route::view('/hadith', 'hadith');

        Route::view('/about', 'about');



 

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('.home');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



                    Route::prefix('user')->name('user.')->group(function(){
  
        Route::middleware(['guest:web','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.user.login')->name('login');
          Route::view('/register','dashboard.user.register')->name('register');
          Route::post('/create',[UserController::class,'create'])->name('create');
          Route::post('/check',[UserController::class,'check'])->name('check');
        });

            Route::middleware(['auth:web','PreventBackHistory'])->group(function(){
            Route::view('/home','dashboard.user.home')->name('home');
          Route::post('/logout',[UserController::class,'logout'])->name('logout');
          Route::get('/add-new',[UserController::class,'add'])->name('add');
    });

});

Route::prefix('admin')->name('admin.')->group(function(){
       
    Route::middleware(['guest:admin','PreventBackHistory'])->group(function(){
          Route::view('/login','dashboard.admin.login')->name('login');
          Route::post('/check',[AdminController::class,'check'])->name('check');
    });

    Route::middleware(['auth:admin','PreventBackHistory'])->group(function(){
        Route::view('/home','dashboard.admin.home')->name('home');
        Route::post('/logout',[AdminController::class,'logout'])->name('logout');
    });

});
