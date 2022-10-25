# Overview :
Quran is the way of life, every musllim should study and learn how to read, meaning of Al quran and practice it.
There are 114 Surahs in the Quran. Each surah has a different name and will talk about everything from etiquette, heritage, medicine, and the cosmic system. Muslims believed and instilled in them from a young age that the Quran is holy. and Muslims honor it.
Objective :
To design and develop Quran Web Application.
To allow users to use the Quran website easily.
# Requirement :
Our requirement is user convenience. In case the user wants to study the story of each Quran If users want to know or study the story of the Quran, they can learn from the various topics contained in the Quran.
# Source Code :
Route
// kiblat
 @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('กิบลัต') }}</a>
                                </li>
                            @endif
                            
<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header"><?php echo e(__('กิบลัต')); ?></div>

                <div class="card-body">
                    <form method="POST" action="<?php echo e(route('register')); ?>">
                        <?php echo csrf_field(); ?>

                        <img src="{{ URL::to('img/kiblat.PNG') }}">
      <br><br>
      <h2 class="text-capitalize lead"></h2>
      <div class="col-md-3"></div>
    </div>
*database.php
                    <?php

use Illuminate\Support\Str;

return [

    /*
    |--------------------------------------------------------------------------
    | Default Database Connection Name
    |--------------------------------------------------------------------------
    |
    | Here you may specify which of the database connections below you wish
    | to use as your default connection for all database work. Of course
    | you may use many connections at once using the Database library.
    |
    */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
    |--------------------------------------------------------------------------
    | Database Connections
    |--------------------------------------------------------------------------
    |
    | Here are each of the database connections setup for your application.
    | Of course, examples of configuring each database platform that is
    | supported by Laravel is shown below to make development simple.
    |
    |
    | All database work in Laravel is done through the PHP PDO facilities
    | so make sure you have the driver for your particular database of
    | choice installed on your machine before you begin development.
    |
    */

    'connections' => [

        'sqlite' => [
            'driver' => 'sqlite',
            'url' => env('DATABASE_URL'),
            'database' => env('DB_DATABASE', database_path('database.sqlite')),
            'prefix' => '',
            'foreign_key_constraints' => env('DB_FOREIGN_KEYS', true),
        ],

        'mysql' => [
            'driver' => 'mysql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'unix_socket' => env('DB_SOCKET', ''),
            'charset' => 'utf8mb4',
            'collation' => 'utf8mb4_unicode_ci',
            'prefix' => '',
            'prefix_indexes' => true,
            'strict' => true,
            'engine' => null,
            'options' => extension_loaded('pdo_mysql') ? array_filter([
                PDO::MYSQL_ATTR_SSL_CA => env('MYSQL_ATTR_SSL_CA'),
            ]) : [],
        ],

        'pgsql' => [
            'driver' => 'pgsql',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', '127.0.0.1'),
            'port' => env('DB_PORT', '5432'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
            'schema' => 'public',
            'sslmode' => 'prefer',
        ],

        'sqlsrv' => [
            'driver' => 'sqlsrv',
            'url' => env('DATABASE_URL'),
            'host' => env('DB_HOST', 'localhost'),
            'port' => env('DB_PORT', '1433'),
            'database' => env('DB_DATABASE', 'forge'),
            'username' => env('DB_USERNAME', 'forge'),
            'password' => env('DB_PASSWORD', ''),
            'charset' => 'utf8',
            'prefix' => '',
            'prefix_indexes' => true,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Migration Repository Table
    |--------------------------------------------------------------------------
    |
    | This table keeps track of all the migrations that have already run for
    | your application. Using this information, we can determine which of
    | the migrations on disk haven't actually been run in the database.
    |
    */

    'migrations' => 'migrations',

    /*
    |--------------------------------------------------------------------------
    | Redis Databases
    |--------------------------------------------------------------------------
    |
    | Redis is an open source, fast, and advanced key-value store that also
    | provides a richer body of commands than a typical key-value system
    | such as APC or Memcached. Laravel makes it easy to dig right in.
    |
    */

    'redis' => [

        'client' => env('REDIS_CLIENT', 'phpredis'),

        'options' => [
            'cluster' => env('REDIS_CLUSTER', 'redis'),
            'prefix' => env('REDIS_PREFIX', Str::slug(env('APP_NAME', 'laravel'), '_').'_database_'),
        ],

        'default' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_DB', '0'),
        ],

        'cache' => [
            'url' => env('REDIS_URL'),
            'host' => env('REDIS_HOST', '127.0.0.1'),
            'password' => env('REDIS_PASSWORD', null),
            'port' => env('REDIS_PORT', '6379'),
            'database' => env('REDIS_CACHE_DB', '1'),
        ],

    ],

];

*bootstrap.css
/*!
 * Bootstrap v4.4.1 (https://getbootstrap.com/)
 * Copyright 2011-2019 The Bootstrap Authors
 * Copyright 2011-2019 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */
:root {
  --pink: #e29bb1;
  --blue: #007bff;
  --indigo: #6610f2;
  --purple: #6f42c1;
  --pink: #e83e8c;
  --red: #dc3545;
  --orange: #fd7e14;
  --yellow: #ffc107;
  --green: #28a745;
  --teal: #20c997;
  --cyan: #17a2b8;
  --white: #fff;
  --gray: #6c757d;
  --gray-dark: #343a40;
  --primary: #007bff;
  --secondary: #6c757d;
  --success: #28a745;
  --info: #17a2b8;
  --warning: #ffc107;
  --danger: #dc3545;
  --light: #f8f9fa;
  --dark: #343a40;
  --breakpoint-xs: 0;
  --breakpoint-sm: 576px;
  --breakpoint-md: 768px;
  --breakpoint-lg: 992px;
  --breakpoint-xl: 1200px;
  --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
  --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}

*,
*::before,
*::after {
  box-sizing: border-box;
}

*tafseerseeder.php
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class TafseerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('tafseers')->delete();

        \DB::table('tafseers')->insert([
            ['id'=>'1','name'=>'#คุฏบะฮ์ ความลับสูเราะฮ์อัล-ฟาติหะฮ์ - ซุฟอัม อุษมาน','youtubeId'=>'H8yLaMW-v6k','datasurah_id'=>'1'],
            ['id'=>'2','name'=>'AH 1106 คุณค่าของ อัล-ฟาติฮะห์ โดย เชคริฎอ อะหมัด สมะดี','youtubeId'=>'dBWUgWote7k','datasurah_id'=>'1'],
            ['id'=>'3','name'=>'ตัฟซีรซูเราะห์อัลฟาติฮะห์ บรรยายธรรมอิสลาม อ.อิสมาแอล วิสุทธิปราณี','youtubeId'=>'YtzEk78gbQI','datasurah_id'=>'1'],
            ['id'=>'4','name'=>'AH 2448 ตัฟซีรอัลกุรอ่าน ซูเราะห์อัลบากอเราะห์ โดย อาจารย์มุบาร็อก มะหะหมัดซอและห์','youtubeId'=>'4sHU5JwxpEU','datasurah_id'=>'2'],
            ['id'=>'5','name'=>'ตัฟซีรอัลกุรอ่าน ซูเราะฮฺที่ 2 อัลบากอเราะฮฺ ตอน 1 (อายะฮฺที่ 1-2)','youtubeId'=>'nVtG0fmOYsw','datasurah_id'=>'2']
]);    
}

}
*navber.css

 @font-face {
  font-family:'Uthmani' ;
  src: url('assets/font/UthmanicHafs1Ver09.otf')format('truetype');
}
.arabic{
   font-family: 'Uthmani', serif;
   font-size: 23px;
   font-weight: normal;
   direction: rtl;
   padding: 0 5px;
   margin: 0;
}
.latin{
  font-family:  serif;
  font-size: 17px;
  font-weight: normal;
  direction: ltr;
  padding: 0;
  margin: 0;
}
.arabic_number {
  font-size: 28px;
  font-weight: normal;
}
  .cautions {
  
  font-size: 13px;
  font-weight: normal;
  direction: ltr;
  padding: 0 5px;
  margin: 0;
  color: red;

}
.foot {
  text-align: center;
  padding: 3px;
  background-color:#e29bb1 ;
  color: white;
  }
.open-button {
  background-color:#86DCEC ;
  color: #F2F5F5;
  padding: 14px 16px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  
  bottom: 10px;
  right: 20px;
  width: 60px;
}
.open-button2 {
  background-color: #E473A1;
  color: #F2F5F5;
  padding: 14px 16px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  
  bottom: 10px;
  right: 20px;
  width: 100px;
}
.open-button3 {
  background-color: #e29bb1;
  color: #F2F5F5;
  padding: 14px 16px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  
  bottom: 10px;
  right: 20px;
  width: 100px;
}
.open-button4 {
  background-color: #e29bb1;
  color: #F2F5F5;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.open-button5 {
  background-color:#86DCEC ;
  color: #F2F5F5;
  padding: 14px 16px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  
  bottom: 10px;
  right: 20px;
  width: 100px;
}



.latin2{
  font-family:  serif;
  font-size: 20px;
  font-weight: normal;
  direction: rtl;
  padding: 0;
  margin: 0;
}
 .arabic_number {
   font-size: 28px;
   font-weight: normal;
   
}

.footer {
    text-align: center;
    padding: 3px;
    background-color:#e29bb1;
    color: white;
  }.text {
    
    color: white;
    font-size: 10vw; 
    font-weight: bold;
    text-align: center;
  }

  .header-dark {
    background-color:#e29bb1;
    background-size:cover;
    padding-bottom:80px;
  }

* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color:#e29bb1;
}

.topnav a {
  float: left;
  display: block;
  color: rgb(253, 252, 252);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color:#e29bb1;
  color: white;
}

.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  body {margin:2rem;}

.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }



.modal-body {
  position:relative;
  padding:0px;
}
.close {
  position:absolute;
  right:-30px;
  top:0;
  z-index:999;
  font-size:2rem;
  font-weight: normal;
  color:#fff;
  opacity:1;
}

.bs-example{
  margin: 20px;
}
.modal-dialog iframe{
    margin: 0 auto;
    display: block;
}
}
