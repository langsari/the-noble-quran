
# Introduction :
- This project is a development from a project that seniors have done in the past. We have seen the imperfections of the project. for example Translations that are not shown , Incomplete audio files, colors and pages of the web page are not interested.
So we want to continue this project to make this project more complete and add some functions.

# Problem Definition :
- Almost all Muslims today are able to read the Quran. But there are also many people who read it and do not understand the meaning of the Qur'an, and there are many people who misread the Quran because they do not know the correct way of reading it. So we have seen this problem. We have added a function to translate both Thai and English languages. and add a function to teach the correct reading method.

# Objective :
- TO provide convenience for people who want to read Al-Quran anytime, anywhere.
- For everyone can understand the meaning of Al-Quran.
- For everyone to learn how to read correctly.
- For  everyone can listen to Al-Quran.

# Requirements :
- Function tajweed.
- Function translate the meaning of the Quran into English and Thai.
- Audio Quran recitation.


# Constraints :
- Can only open on website, can't open in phone
- There is only one audio file of Sheik.
- No tabsir.

# software requirement :
 
| Software  | Version   |
|---------  |---------  |
| Laravel   |  8.1      |
| php       | 7.4.19    |
| Laragon   | 5.0.0     |
| Vs code   |1.72.0     |

# Source Code :
- Creat table of function Tajweed
- routes
- models
- controller
- Import data for show data on website 
- view

# Creat table of function Tajweed :
```php
public function up()
    {
        Schema::create('tajweeds', function (Blueprint $table) {
            $table->id();
            $table->string('hukum', 200);
            $table->string('name', 200);
            $table->string('ayat', 200);
            $table->string('audio', 200);
        });
    }
 ```   
# routes :
- is the part used to store files in the routing (Url) of the Web

```Route::get('/Tajweed',[QuransController::class,'Tajweed'])->name('Tajweed');```
# models : 
- Take care of communication between Object and Database without developers having to deal with the hassle of using SQL commandg.
```
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tajweed extends Model
{
    use HasFactory;
}
```
# controller :
- It is the part that runs first when the program is called from the Web Browser.
- It is the interface between the user and the program.
- have contact with Database (database) with Model and display data via View
- It is the main processing part of the program.
```
public function Tajweed(){
        $tajweed=Tajweed::all();
        return view('quran.Tajweed', compact('tajweed'));
```
# Import data for show data on website :
```
<body>
    <h1 class="tajweed"> <strong> Tajweed </strong>  </h1>
    <hr>
<h2 class="sakinah">( นูนซากีนะห์ )</h2>
    @foreach($tajweed as $row)
    <div>
    <h5 class="hukum">{{$row->name}} </h5>
<p class="expain"> {{$row->audio}}</p>
<p class="ayat"> {{$row->ayat}}</p>
<h2 class="memsakinah"> {{$row->hukum}}</h2>
</div>@endforeach
<br>
<br>
</body>
```
# view :
- It is the part that must be displayed through the Web Browser, written with the basics of HTML inserted as well. Script PHP or JavaScript according to the syntax of each language used
- Working relationship with Controller
- View is a display that brings data from Controller to display, can set Style Sheet and Templates so that all web applications have the same standards.
![tajweed page](https://user-images.githubusercontent.com/93647715/196645414-256325d7-b058-4aae-a4a0-e6fd33f41b54.jpg)


# User Interface Disign :
- Home page
![page](https://user-images.githubusercontent.com/93647715/196515802-f9a76462-e0a4-4a29-8ebc-cf19a008420b.jpg)
- Surah page
 ![Surah page](https://user-images.githubusercontent.com/93647715/196515925-b84d523c-3682-4010-8f00-07b2c1ae9e02.jpg)
 
 
 
# Database :
![data](https://user-images.githubusercontent.com/93647715/196516299-926192fc-a13a-42de-98fe-c28d497b4d9c.jpg)

# Language requirements :
- HTML
- BLADE
- PHP


# Software Method :
- Use case diagram
- Activity diagram
- Data flow diagram


# Use case diagram :
![Use case diagram drawio](https://user-images.githubusercontent.com/93647715/196412362-8fe28f9c-f477-4dd4-a647-4c911be82899.png)

# Activity Diagram :
![activity diagram drawio](https://user-images.githubusercontent.com/93647715/196412715-68f982f1-4abc-4688-b196-e05b79bde29e.png)



# Data flow Diagram :
![Data](https://user-images.githubusercontent.com/93647715/196413804-54249478-6429-49d8-b4a1-4b2826809a46.png)


# Conclusion :
- This project is developed so that everyone can read the Quran. Anyone can come and study the meaning of the Quran, listen to the Quran. They can also study and learn how to read correctly.


