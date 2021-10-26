<?php

use App\http\Controllers\HomeController;
use App\http\Controllers\SurahController;
use App\http\Controllers\VideoController;
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

Route::get('surah/1',[SurahController::class,'one']);
Route::get('surah/2',[SurahController::class,'two']);
Route::get('surah/3',[SurahController::class,'three']);
Route::get('surah/4',[SurahController::class,'four']);
Route::get('surah/5',[SurahController::class,'five']);
Route::get('surah/6',[SurahController::class,'six']);
Route::get('surah/7',[SurahController::class,'seven']);
Route::get('surah/8',[SurahController::class,'eight']);
Route::get('surah/9',[SurahController::class,'nine']);
Route::get('surah/10',[SurahController::class,'ten']);
Route::get('surah/11',[SurahController::class,'eleven']);
Route::get('surah/12',[SurahController::class,'twelve']);
Route::get('surah/13',[SurahController::class,'thirteen']);
Route::get('surah/14',[SurahController::class,'fourteen']);
Route::get('surah/15',[SurahController::class,'fifteen']);
Route::get('surah/16',[SurahController::class,'sixteen']);
Route::get('surah/17',[SurahController::class,'seventeen']);
Route::get('surah/18',[SurahController::class,'eighteen']);
Route::get('surah/19',[SurahController::class,'nineteen']);
Route::get('surah/20',[SurahController::class,'twenty']);
Route::get('surah/21',[SurahController::class,'twentyone']);
Route::get('surah/22',[SurahController::class,'twentytwo']);
Route::get('surah/23',[SurahController::class,'twentythree']);
Route::get('surah/24',[SurahController::class,'twentyfour']);
Route::get('surah/25',[SurahController::class,'twentyfive']);
Route::get('surah/26',[SurahController::class,'twentysix']);
Route::get('surah/27',[SurahController::class,'twentyseven']);
Route::get('surah/28',[SurahController::class,'twentyeight']);
Route::get('surah/29',[SurahController::class,'twentynine']);
Route::get('surah/30',[SurahController::class,'thirty']);
Route::get('surah/31',[SurahController::class,'thirtyone']);
Route::get('surah/32',[SurahController::class,'thirtytwo']);
Route::get('surah/33',[SurahController::class,'thirtythree']);
Route::get('surah/34',[SurahController::class,'thirtyfour']);
Route::get('surah/35',[SurahController::class,'thirtyfive']);
Route::get('surah/36',[SurahController::class,'thirtysix']);
Route::get('surah/37',[SurahController::class,'thirtyseven']);
Route::get('surah/38',[SurahController::class,'thirtyeight']);
Route::get('surah/39',[SurahController::class,'thirtynine']);
Route::get('surah/40',[SurahController::class,'forty']);
Route::get('surah/41',[SurahController::class,'fortyone']);
Route::get('surah/42',[SurahController::class,'fortytwo']);
Route::get('surah/43',[SurahController::class,'fortythree']);
Route::get('surah/44',[SurahController::class,'fortyfour']);
Route::get('surah/45',[SurahController::class,'fortyfive']);
Route::get('surah/46',[SurahController::class,'fortysix']);
Route::get('surah/47',[SurahController::class,'fortyseven']);
Route::get('surah/48',[SurahController::class,'fortyeight']);
Route::get('surah/49',[SurahController::class,'fortynine']);
Route::get('surah/50',[SurahController::class,'fifty']);
Route::get('surah/51',[SurahController::class,'fiftyone']);
Route::get('surah/52',[SurahController::class,'fiftytwo']);
Route::get('surah/53',[SurahController::class,'fiftythree']);
Route::get('surah/54',[SurahController::class,'fiftyfour']);
Route::get('surah/55',[SurahController::class,'fiftyfive']);
Route::get('surah/56',[SurahController::class,'fiftysix']);
Route::get('surah/57',[SurahController::class,'fiftyseven']);
Route::get('surah/58',[SurahController::class,'fiftyeight']);
Route::get('surah/59',[SurahController::class,'fiftynine']);
Route::get('surah/60',[SurahController::class,'sixty']);
Route::get('surah/61',[SurahController::class,'sixtyone']);
Route::get('surah/62',[SurahController::class,'sixtytwo']);
Route::get('surah/63',[SurahController::class,'sixtythree']);
Route::get('surah/64',[SurahController::class,'sixtyfour']);
Route::get('surah/65',[SurahController::class,'sixtyfive']);
Route::get('surah/66',[SurahController::class,'sixtysix']);
Route::get('surah/67',[SurahController::class,'sixtyseven']);
Route::get('surah/68',[SurahController::class,'sixtyeight']);
Route::get('surah/69',[SurahController::class,'sixtynine']);
Route::get('surah/70',[SurahController::class,'seventy']);
Route::get('surah/71',[SurahController::class,'seventyone']);
Route::get('surah/72',[SurahController::class,'seventytwo']);
Route::get('surah/73',[SurahController::class,'seventythree']);
Route::get('surah/74',[SurahController::class,'seventyfour']);
Route::get('surah/75',[SurahController::class,'seventyfive']);
Route::get('surah/76',[SurahController::class,'seventysix']);
Route::get('surah/77',[SurahController::class,'seventyseven']);
Route::get('surah/78',[SurahController::class,'seventyeight']);
Route::get('surah/79',[SurahController::class,'seventynine']);
Route::get('surah/80',[SurahController::class,'eighty']);
Route::get('surah/81',[SurahController::class,'eightyone']);
Route::get('surah/82',[SurahController::class,'eightytwo']);
Route::get('surah/83',[SurahController::class,'eightythree']);
Route::get('surah/84',[SurahController::class,'eightyfour']);
Route::get('surah/85',[SurahController::class,'eightyfive']);
Route::get('surah/86',[SurahController::class,'eightysix']);
Route::get('surah/87',[SurahController::class,'eightyseven']);
Route::get('surah/88',[SurahController::class,'eightyeight']);
Route::get('surah/89',[SurahController::class,'eightynine']);
Route::get('surah/90',[SurahController::class,'ninety']);
Route::get('surah/91',[SurahController::class,'ninetyone']);
Route::get('surah/92',[SurahController::class,'ninetytwo']);
Route::get('surah/93',[SurahController::class,'ninetythree']);
Route::get('surah/94',[SurahController::class,'ninetyfour']);
Route::get('surah/95',[SurahController::class,'ninetyfive']);
Route::get('surah/96',[SurahController::class,'ninetysix']);
Route::get('surah/97',[SurahController::class,'ninetyseven']);
Route::get('surah/98',[SurahController::class,'ninetyeight']);
Route::get('surah/99',[SurahController::class,'ninetynine']);
Route::get('surah/100',[SurahController::class,'onehundred']);
Route::get('surah/101',[SurahController::class,'onehundredone']);
Route::get('surah/102',[SurahController::class,'onehundredtwo']);
Route::get('surah/103',[SurahController::class,'onehundredthree']);
Route::get('surah/104',[SurahController::class,'onehundredfour']);
Route::get('surah/105',[SurahController::class,'onehundredfive']);
Route::get('surah/106',[SurahController::class,'onehundredsix']);
Route::get('surah/107',[SurahController::class,'onehundredseven']);
Route::get('surah/108',[SurahController::class,'onehundredeight']);
Route::get('surah/109',[SurahController::class,'onehundrednine']);
Route::get('surah/110',[SurahController::class,'onehundredten']);
Route::get('surah/111',[SurahController::class,'onehundredeleven']);
Route::get('surah/112',[SurahController::class,'onehundredtwelve']);
Route::get('surah/113',[SurahController::class,'onehundredthirteen']);
Route::get('surah/114',[SurahController::class,'onehundredfourteen']);


//video
Route::get('/v1',[VideoController::class,'v1']);
Route::get('/v2',[VideoController::class,'v2']);
Route::get('/v3',[VideoController::class,'v3']);
Route::get('/v4',[VideoController::class,'v4']);
Route::get('/v5',[VideoController::class,'v5']);
Route::get('/v6',[VideoController::class,'v6']);
Route::get('/v7',[VideoController::class,'v7']);
Route::get('/v8',[VideoController::class,'v8']);
Route::get('/v9',[VideoController::class,'v9']);
Route::get('/v10',[VideoController::class,'v10']);
Route::get('/v11',[VideoController::class,'v11']);
Route::get('/v12',[VideoController::class,'v12']);
Route::get('/v13',[VideoController::class,'v13']);
Route::get('/v14',[VideoController::class,'v14']);
Route::get('/v15',[VideoController::class,'v15']);
Route::get('/v16',[VideoController::class,'v16']);
Route::get('/v17',[VideoController::class,'v17']);
Route::get('/v18',[VideoController::class,'v18']);
Route::get('/v19',[VideoController::class,'v19']);
Route::get('/v20',[VideoController::class,'v20']);
Route::get('/v21',[VideoController::class,'v21']);
Route::get('/v22',[VideoController::class,'v22']);
Route::get('/v23',[VideoController::class,'v23']);
Route::get('/v24',[VideoController::class,'v24']);
Route::get('/v25',[VideoController::class,'v25']);
Route::get('/v26',[VideoController::class,'v26']);
Route::get('/v27',[VideoController::class,'v27']);
Route::get('/v28',[VideoController::class,'v28']);

Route::get('/v71',[VideoController::class,'v71']);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
