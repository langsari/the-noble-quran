

# Overview

All praise belongs to Allah.  Who gave His servants the Scriptures, and He did not make any distortions.  I praise You, Subhanah, for making Your Book a guide for the believers.  And I praise to whom the Qur'an is revealed to light your heart.  and a radiance to your bosom.  and have adhered to the right path

The Holy Quran is the Holy Book or the Scripture of the Muslims. It lays down for them the law and commandments, codes for their social and moral behaviour, and contains a comprehensive religious philosophy. The language of the Quran is Arabic. It is a compilation of the verbal revelations given to the Holy Prophet Muhammad(Peace be upon him)

# Introuction
Many people who read the Qur'an also distort some of the words in a specific verse.  We have created a page feature in it.  Provide knowledge of specific words in the Quran so that everyone can read them correctly.  and explain about that word and tell where it is in the Quran

# PROBLEM STATEMENT 

 From what we have noticed, there are only a few websites.  Doing about the Quran website and people nowadays most people are online.

 live with the phone  which we have created the Holy Quran website  to be something that is beneficial to all Muslims  In the Quran we have added features which are  specific words in the Quran  It's a word that we come across very often.  And more importantly, there are still many people who misread those words.  So there was an idea to add that function.  to educate about those words

 All this to make it easy for all of us to search Quran and learn Quran.
 
 # OBJECTIVE
 - To design and develop Quran Web Application in Thai language.
 - To make convenience for user in learning The Quran.
 - To be a resource for anyone interested in studying the Quran.
 - Add a feature about  specific words in the Quran  to educate about those words  
 - To make things easy for all of us to make the website for the Quran more thorough.


# Software requirement
 
| Software  | Version   |
|---------  |---------  |
| Laravel   |  8.1      |
| php       | 7.4.19    |
| Vs code   |1.72.0     |
|  Laragon  |5.0.0      |


# Software Method :
* Activity diagram
* Sequence diagram
* Class Diagram

# Activity diagram
@startuml

(*) --> " Click spacificword page"
(*) --> " Query all spacificword in database "
(*) --> " Get all spacificword in databas"
(*) --> " Display  spacificword "
 --> (*)
 
@enduml



# Sequence diagram
```Sequence
    User -> Home page : press spacificwords
    Home page -> Spacificwords page : Show Spacificwords
    Spacificwords page -> Database : Get in Database
    Database --> Spacificwords pade : Return Spacificwords 
    Spacificwords page --> User : Display   Spacificword page
 ```
      
    


# Class Diagram

```
   Class Diagram
       Spacificwords : - int id
       Spacificwords : + string name_surah
       Spacificwords : + int ayan_num
       Spacificwords : + string text_spacific
       Spacificwords : + string explain_text
       Spacificwords : + show ()
  ```

# interface  text

![quran](https://user-images.githubusercontent.com/96815756/196480309-d460ca2c-f642-45cf-ab0f-85c429549d61.png)

# feature Spacificword

![quran5](https://user-images.githubusercontent.com/96815756/196481581-e1b00988-5803-40a7-a7ca-7e314680bb26.png)

# Source Code

## Route
This code use for connecting bitween database and view
```php
Route::get('/specificwords',[QuransController::class, 'specificwords'])->name('specificwords');
```
## migrations

```php
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class CreateSpecificWordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('specific_words', function (Blueprint $table) {
            $table->id();
            $table->string('name_surah');
            $table->integer('ayat_num');
            $table->string('text_specific');
            $table->string('explain_texts');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('specific_words');
    }
}
```
## views
```html

@extends('quran.navbar')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>specificword</title>
</head>

    //use css for front in decoration
<style>
// t is class name of explain_texts
.t {
  background-color: white;
  color: black;
  font-family:  serif;
        font-size: 15px;
        direction: rtl;
        font-weight: normal;
        
        padding: 0;
        margin: 0;
}
@font-face {
    font-family: quran-font;
    font-style: normal;
    font-weight: 400;
    src: url('assets/font/AmiriQuranColored.woff') format('truetype');
  }
  
  .ayat{
     font-family: quran-font;
     direction: rtl;
     font-size: 26px;
     line-height: 200%;
     color: black;
   }
   .ayat .kalimah{
    font-family: quran-font;
     direction: rtl;
     font-size: 26px;
     line-height: 200%;
     color:#008080;
   }
   .title{
    text-align: center;

}
</style>

<br>
    <br>
 <div style = background-color:white; class="search-area">
 <div class="row">
    <div class="col-md-8 mx-auto">
<br>
<br>


<body>


//Heading 
    <h1 class="title">คำที่ควรสังเกตในอัลกุรอาน</h1>
    
    //Use lop condition for show all in database 
    @foreach($specific as $row)
    //Use <p> for show ayat get from database use this link {{$row->text_specific}}
    <div class="ayat"><p>{{$row->text_specific}}</p></div>
         //Use <p> for show explain get from database use this link {{$row->explain_texts}}
    <p class="t">{{$row->explain_texts}}</p>
        //Use <p> for show surah name and ayat num get from database use this link {{$row->name_surah}} and {{$row->ayat_num}}
    <p>({{$row->name_surah}} : {{$row->ayat_num}})</p>
       
    //Use <audio controls > for show audio 
      <audio controls >
      <source src="" type="audio/mpeg">
      </audio>
      <hr color=black > 
      <br>

        @endforeach
     
     
     
</body>

</html>

    
          
```
# Result

![ผลลัพ](https://user-images.githubusercontent.com/96815756/196645073-b38c1c32-7121-4985-adea-cad3ae6d87d7.png)

![ผลลัพ1](https://user-images.githubusercontent.com/96815756/196645151-ff2ae474-2e99-4ed3-93c7-2517e0e30f8b.png)

# Conclusion

   The Quran is considered the life of everyone.  A person who has the Quran is a person who lives, and in the Noble Quran there are many functions.  which we have added is  specific words in the Quran  It's a word that we come across very often, and most importantly, there are still a lot of people who misread about them.  So there was an idea to add that function.  to educate about those words
  All this to make it easy for all of us to search Quran and learn Quran.

