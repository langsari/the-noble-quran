# Quran.th :-

> **Introduction :**

The Quran is the holy scriptures or scriptures of Muslims. It is a provision for Muslims. The language of the Quran is Arabic. Perhaps many people who read the Quran do not know that certain words or verses in the Quran can or are dua that every Muslim reads every day. whether it is all the time of prayer, Remembrance of Allah in the morning and evening or various duas.
That's why our group has added a feature in this project “Quran.th for Thai language” so that everyone can access the dua feature that is a verse of the Quran.

## Problem definition :

At present, there are very few reliable Thai translation sites of the Quran from what we have searched. Some sites do not have a feature that can let people who read or view it that the Quran we read can also be used as dua in our daily life. Mainly in this project we will add a feature that is a page that adds verses in the Quran that can be used as dua in daily life and improve the front-end page. 

## Objective :

1. Thai users can know the dua that is the verse of the Quran and they can be used in daily life.
2. To make it convenient for Thai users to learn The Quran.

## SCOPE Who is your target :

1. The target is for Thai speakers of all ages.
2. The Web application is available for visitors to learn The Quran verses used as dua in daily life.

## Requirement : 

- M - Mandatory requirement (what the system must do)
- D - Desirable requirement (what the system preferably should do)
- O - Optional requirement (what the system may do)

| Requirements ID | Requirement Description | Priority |
| ------------- | ------------- | -------- |
| REQ_01        | Dua from Quran verses    |          |
| REQ_01.1      | Admin CRUD dua from Quran verses | M |
| REQ_01.2      | Display dua from Quran verses to end-user | M |

<br>

> Software requirement
 
| Software  | Version  |
|---------  |--------- |
| Laravel   | 8.1      |
| php       | 7.4.19   |
| Vs code   | 1.72     |
| Laragon   | 5.0.0    |
| Composer  | 2.4.0    |   

## Design :

> **Use case diagram :**

```
@startuml
rectangle Dua {
  User -- (Login)
  (Login) .> (Register) : include
  User -- (Display Dua Translation)
  User -- (Read Dua Page)
  (Login) -- Admin
  (CRUD Quran Translation) -- Admin
  (CRUD Dua page) -- Admin
}
@enduml
```

<br>

> **Activity diagram :**

```
@startuml
(*)-->"Click Manage Dua"
-right->"Display Manage Dua form "
-->"CRUD DUA"
If "Validate" then
-right-> [Error] "Display Error"
--> "CRUD DUA"
else
--> [Valid]"DRUD in Dua database"
Endif
-->(*)
@enduml
```

<br>

> **User interface :**

<img width="1266" alt="image" src="https://user-images.githubusercontent.com/95903407/196587727-7394f715-e099-466b-8b34-eabc08ffd303.png">

<img width="1266" alt="image" src="https://user-images.githubusercontent.com/95903407/196587898-3d2d19e4-7176-4f30-ab77-85fdfd314f7e.png">

## Development :

```

```

## Test :

1. Open Laragon and click on start button.
2. Click on database for open phpmyadmin and create database then import database file.
3. Open VS code and open project folder on it.
4. Type php artisan serve in VS code terminal and click the link to enter the Quran.th web page.

```
```
