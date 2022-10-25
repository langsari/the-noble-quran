# Overview :
Quran is the way of life, every musllim should study and learn how to read, meaning of Al quran and practice it.
There are 114 Surahs in the Quran. Each surah has a different name and will talk about everything from etiquette, heritage, medicine, and the cosmic system. Muslims believed and instilled in them from a young age that the Quran is holy. and Muslims honor it.


# Problem Statement :
As I mentioned above, for The Quran website, The website which exists does not completely consist of basic features if compared with website quran.com. For quran.com contains Quran-Text, Tafseerquran, Audio and Search-Button. And the Quran website in Thai is also complicated to make it difficult to use. Also, these websites are outdated and not constantly updated. Thus, it led me to develop THE NOBLE QURAN WEB APPLICATION in the form of a web application and make it functionally. The next chapter provides the related work in this area.


# Objective :
1. To design and develop Quran Web Application.
3. To allow users to use the Quran website easily.
4. To make convenience for users in learning The Quran.


# Software Requirement : 
| Software  | Version   |
|---------  |---------  |
| Laravel   | 8.1      |
| php       | 7.4.19    |
| Laragon   | 5.0.0     |
| Vs code   |1.72.0     |


# Requirement :
Our requirement is user convenience. In case the user wants to study the story of each Quran This time we have added a Qibla slot as well so that users can search and learn from the information we have put in. If users want to know or study the story of the Quran, they can learn from various topics. contained in the Quran.

# Constraints :
The limitation of the function we do is Users can learn the topics of the Quran that we have preliminarily on our website. At this time, not all topics in the Quran may be covered. In the future, we may develop more topics. to cover as much as possible.


# Software Method : 
- Activity Diagram
- Sequence Diagram 

## Activity Diagram :
```activity
@startuml
(*)  --> "click เข้าสู่ระบบ"
--> "Comeplete your data"
--> "type your Email and Password"
--> "press sigh in"
--> (*)
@enduml
```


## Sequence Diagram :
```sequence
User->>Ontology Page: Get เข้าสู่ระบบ
Ontology Page->>User: Comeplete your data
User->>Ontology Page: type your Email and Password
User->>Ontology Page: press sigh in
sigh in Page->User: sigh in
```


# Source Code :
## Route
```
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
    ```
    
 ## Navbar
 ```
 ```
 @font-face {
 ``` font-family:'Uthmani' ;
  src: url('assets/font/UthmanicHafs1Ver09.otf')format('truetype');
}
```
```.arabic{
   font-family: 'Uthmani', serif;
   font-size: 23px;
   font-weight: normal;
   direction: rtl;
   padding: 0 5px;
   margin: 0;
}
```
```.latin{
  font-family:  serif;
  font-size: 17px;
  font-weight: normal;
  direction: ltr;
  padding: 0;
  margin: 0;
}
```
```.arabic_number {
  font-size: 28px;
  font-weight: normal;
}
```
```
.cautions {
  
  font-size: 13px;
  font-weight: normal;
  direction: ltr;
  padding: 0 5px;
  margin: 0;
  color: red;

}
```
```
.foot {
  text-align: center;
  padding: 3px;
  background-color:#e29bb1 ;
  color: white;
  }
  ```
  ```
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
```
```
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
```
```
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
```
```
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
```
```
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
```
```
.latin2{
  font-family:  serif;
  font-size: 20px;
  font-weight: normal;
  direction: rtl;
  padding: 0;
  margin: 0;
}
```
```
 .arabic_number {
   font-size: 28px;
   font-weight: normal;
   
}
```
```
.footer {
    text-align: center;
    padding: 3px;
    background-color:#e29bb1;
    color: white;
  }.text {
    ```
    ```
    color: white;
    font-size: 10vw; 
    font-weight: bold;
    text-align: center;
  }
   ```
   ```
  .header-dark {
    background-color:#e29bb1;
    background-size:cover;
    padding-bottom:80px;
  }
  ```
  ```
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}
```
```
.topnav {
  overflow: hidden;
  background-color:#e29bb1;
}
```
```
.topnav a {
  float: left;
  display: block;
  color: rgb(253, 252, 252);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
```
```
.topnav a:hover {
  background-color: #ddd;
  color: black;
}
```
```
.topnav a.active {
  background-color:#e29bb1;
  color: white;
}
```
```
.topnav .search-container {
  float: right;
}
```
```
.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}
```
```
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
```
```
.topnav .search-container button:hover {
  background: #ccc;
}
```
```
@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  ```
  ```
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  ```
  ```
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
  ```
  ```
  body {margin:2rem;}

.modal-dialog {
      max-width: 800px;
      margin: 30px auto;
  }
  ```
  ```

.modal-body {
  position:relative;
  padding:0px;
}
```
```
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
```
```
.bs-example{
  margin: 20px;
}
```
```
.modal-dialog iframe{
    margin: 0 auto;
    display: block;
}
}
```

