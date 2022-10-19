# Introduction :

Today we will talk about the project of the seniors that the teacher gave us to develop further. We have seen that some functions that seniors do. There are some bugs, such as no password reset button. meaningless quran invisible font color Some verses are not read. So we want to continue to make it better. So we have extracted from the existing database and put it in and have fixed the font color and background to be more clear. As for the features that we have added it's reset password funtion and quran vocab for user can read in our website. 


# Problem Definition :

Problems or bugs with this website are Can't change password When the user wants to change the password Maybe in case someone knows the user's password. make the user want to change It can't be changed. For this reason, we added a password change function and also added a Thai language meaning and quran vocab Because it is necessary for Muslims to understand what allah said in the Quran.

# Objective :
#### Reset password feature
- For convenience when users want to change their password
- to respond when the user forgets the password
#### Thai translation feature
- for users to know and understand the meaning of each verse
- for readers to use in daily life
- for Thai users to understand
#### Quran audio feature
- for users can listen
- for guideline to learn how to read correctly according to Tajweed.
#### Quran Vocab feature
- for Muslims to understand and know what Allah says in the Quran
- to practice memorizing the words in the Quran


# Software Requirement : 
| Software  | Version   |
|---------  |---------  |
| Laravel   |  8.1      |
| php       | 7.4.19    |
| Laragon   | 5.0.0     |
| Vs code   |1.72.0     |

# Requirement :

Our requirement is for password reset function. for user convenience In case the user wants to change the password Maybe you don't want anyone to know your old password. Or the old password might be difficult to remember for whatever reason. Users can reset or change their password instantly. and also if the user wants to know the meaning Users can immediately access the meaning in the website and user can also press azkar button and read it.


# Constraints :

The limitation of the password reset function that we have done is Let users access our website quran if you forget your password or want to change your password, you can press reset and change your password right away. After that, the system will change the password for the user. After the system completes.


# Software Method :

- Use Case Diagram 
- Flowchart 
- Activity diagram
- Class Diagram


## Use Case Diagram :
A use case diagram is a visual representation of how users interact with the various systems that make up a larger system. The main goal of designing a use case diagram is to fully describe the system's functionality and to solicit user requests. This is regarded as where system analysis and design should begin.

##### Reset password & Vocab in quran

@startuml
User ->(Show quran text)
User ->(Read vocab) 
User ->(Listen quran audio) 
User ->(Show verse thai Translate) 
User ->(Search surah) 

visitor->(Show quran text)
visitor->(Listen quran audio)
visitor->(Show verse thai Translate)
visitor->(Search surah)

Admin ->(CRUD Dash bord)
Admin ->(CRUD Quran text)
Admin ->(CRUD Staff)
Admin ->(CRUD Quran Audio)
@enduml 


## Flowchart :
A data flow diagram demonstrates the path that information takes through a system or process. It contains the numerous subprocesses the data flows through, data inputs and outputs, and data stores.

##### Reset password 

```
reset password 
A[Round edge] -->B(Hard edge)
    B --> Buttom{Decision}
    C -->|No|  A[Round edge]
    C -->|Yes| E[Reset password page]
```

##### Vocab in quran
```
dictionary
A[Round edge] -->B(Hard edge)
    B --> Buttom{Decision}
    C -->|No|  A[Round edge]
    C -->|Yes| E[Vocab page]
    }
```

## Activity diagram :
Activity diagrams are a method for describing work flow, business processes, and procedural logic. They serve a similar purpose to flowcharts in many aspects, but the main distinction between the two is that they permit parallel behavior.

##### Reset password 

@startuml
(*)-->"Request Reset password"
-->"Get request page "
-->"Type new password"
-->"Save new password"
-->(*)
@enduml

##### Vocab in quran

@startuml
(*)-->"Request Vocab page"
-->"Get request page "
-->"Show Vocab page"
-->(*)
@enduml

## Class Diagram :
Class diagrams are the blueprints of your system or subsystem. We can use class diagrams to model the objects that make up the system, to display the relationships between the objects, and to describe what those objects do and the services that they provide.

##### Reset password 

```Reset password
classDiagram
      Actor <|-- User
      Actor <|-- Data base
      Actor <|-- Admin

      class User{
          +Name
          -Email()
          -Password()
      }
      class Data base{
          -Keep data for user
          -Keep user account()
      }
      class Admin{
          -System administrator()
          -Can add more funtion()
          
      }
```

##### Vocab in quran

```
classDiagram
        dictionary: +int id
        dictionary: +String vocab
        dictionary: +String read
        dictionary: +String meaning
	 	dictionary: +String meaning
		dictionary: Show()
      }
```

# Source code :

## Veiw file :

We have used bootstrap to create a table and retrieve the data from the database and display it as rows.

```php
</head>
<body>
    <div class="space"></div>
    <div class="headazkar">
    <button class="button button1">THE WORDS IN QURAN</button><br>
    </div>
  <div class="py-12">
      <div class="container">
        <table class="table table-bordered ">
            <thead class="table-dark">
              <tr>
                <th scope="col">No.</th>
                <th scope="col">คำศัพท์</th>
                <th scope="col">คำอ่าน</th>
                <th scope="col">ความหมาย</th>
                <th scope="col">Meaning</th>
              </tr>
            </thead>
            <tbody>
              @php($i=1)
              @foreach($dictionary as $row)
              <tr>
                  <th>{{$i++}}</th>
                  <td>{{$row->vocab}}</td>
                  <td>{{$row->read}}</td>
                  <td>{{$row->meaning}}</td>
                  <td>{{$row->english}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
      </div>
  </div>
  ```

## Route :

Its main function is to provide a route for users to access the desired page through a URL.

```php
//dictionary route
Route::get('enduser/Azkars', [QuranController::class, 'dictionary'])->name('Azkars');
```

## Migrate file :

It is a file used to create tables through the terminal and send them to the database. with the order $ php artisan serve make:model (name table) -m

```php
public function up()
    {
        Schema::create('dictiories', function (Blueprint $table) {
            $table->id();
            $table->string('vocab', 190);
            $table->string('read', 190);
            $table->string('meaning', 190);
            $table->timestamps();
        });
    }
 ```
    
## Model file :

The model file is responsible for connecting to the database.

```php
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dictiory extends Model
{
    use HasFactory;
}
```

## Controller file :

The controller is responsible for processing. Receive user requirements and extract data from database. to send to users

```php
public function dictionary()
    {
        $dictionary = dictiory::all();
        return view('enduser.Azkars', compact('dictionary'));
    }
 ```
 
## Data base :

This is a database that we have created to include information about Vocabulary in the Qur'an

![MLP 8](https://user-images.githubusercontent.com/96815451/196615301-636a2fc6-a75b-4638-83c6-6a4f40b631e5.png)

# User Interface Design :
: Homepage 

![MLP 1](https://user-images.githubusercontent.com/96815451/196613074-e5aed631-25c9-4b02-bf09-597f29c7fc27.png)

: Login Page 

![image](https://user-images.githubusercontent.com/96815487/196363877-81eaa878-fccc-47d3-8943-2f737debcc3e.png)

: Put Email to reset password Page

![image](https://user-images.githubusercontent.com/96815487/196363960-b7d6cf59-2083-4bf6-9d77-70ada36a6b26.png)

: Receive link to reset password

![image](https://user-images.githubusercontent.com/96815487/196364057-c84d1add-fa8a-482d-ab9a-c9661cb4f9fe.png)

: Reset Password Page 

![image](https://user-images.githubusercontent.com/96815487/196364206-899106a3-845e-4087-bc5f-f1d10ae10300.png)

: Quran vocabulary page

![MLP 2](https://user-images.githubusercontent.com/96815451/196613631-339f1df8-6459-4a9f-8e63-42e7fce4b6b3.png)


# Conclutsion :

  Our project summary is We have seen some flaws in the project. So we added some functions and added some things to the project. 
That is to add a password reset function, add quran vocab, edit background and alphabet color for more clear on website, add meaning thai of quran, and add audio for each verses. Finally, all of this that we have added. It is to provide users with the most convenient use of our website.
