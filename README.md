# Overview :

The Holy Quran is the most sacred book and the word of Allah that given to the prophet Muhammad through the angel Jibril, for the passed it on to his followers. So, the Quran is not a philosophy, poetry, literature, and sorcery, but is a warning from the Lord. The sublime language idioms of the Quran that makes a difference from any of the writings in the world, there is also a profound meaning in the Quranic verses containing questions, answers, warnings and challenges, which are incomparable and not to be  found in any other book in the world. 
The Holy Quran is the book that Allah guides humanity with a complete code of life. And the Quran teaches every aspect of human life which a person needs to know and study about . Being a Muslim, it is our belief that the learning of the Holy Quran is the primary and highly signified learning which is the solution to all problems and issues of our life. Allah(SWT) said :
كَمَآ أَرْسَلْنَا فِيكُمْ رَسُولًا مِّنكُمْ يَتْلُوا۟ عَلَيْكُمْ ءَايَـٰتِنَا وَيُزَكِّيكُمْ وَيُعَلِّمُكُمُ ٱلْكِتَـٰبَ وَٱلْحِكْمَةَ وَيُعَلِّمُكُم مَّا لَمْ تَكُونُوا۟ تَعْلَمُونَ
Since We have sent you a messenger from among yourselves—reciting to you Our revelations, purifying you, teaching you the Book and wisdom, and teaching you what you never knew— 2:151
Islam religion gives importance to learning and encourages reading the Quran, which Allah prescribing many merits for who read the quran. When the Quran was revealed, its first word was “Iqra”, which means to read. However, knowing the meaning of the Quran is also essential to studying it.



# Problem Statement :

As I mentioned above, for The Quran website, The website which exists does not completely consist of basic features if compared with website quran.com. For quran.com contains Quran-Text, Quran-Translation, Navigation, Audio and Search-Button. And the Quran website in Thai is also complicated to make it difficult to use. Also, these websites are outdated and not constantly updated. Thus, it led me to develop THE NOBLE QURAN WEB APPLICATION in the form of a web application and make it functionally. The next chapter provides the related work in this area.

# Objective :
1. To design and develop Quran Web Application.
2. To add completeness to the Quran website.
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

Our requirement is the classification of the Quran. for user convenience In case the user wants to study the story of each Quran Because the Quran has mentioned many things. And if users want to know or study the story of the Quran, they can learn from various topics. contained in the Quran.

# Constraints :
The limitation of the function we do is Users can learn the topics of the Quran that we have preliminarily on our website. At this time, not all topics in the Quran may be covered. In the future, we may develop more topics. to cover as much as possible

# Software Method : 
- Activity Diagram
- Sequence Diagram 

## Activity Diagram :
```activity
@startuml
(*)  --> "click ontology button"
--> "display ontology page"
--> "click class of ontology"
--> "click subclass of ontology"
--> "display ontology ayah page"
--> (*)
@enduml
```

## Sequence Diagram :
```sequence
User->>Ontology Page: Get ontology list
Ontology Page->>User: Display Ontology List
User->>Ontology Page: Click Ontology Button
User->>Ontology Page: Click Class of Ontology
User->>Ontology Page: Click Subclass of Ontology
Ontology Page->User: Display Ontology
```

# Source Code :
## Route
```
//ontology
Route::get('/ontology', function () {
    return view('quran.ontology');
});

Route::get('/ontology/detail', function () {
    return view('quran.ontologyDetail');
});

//holyQuran
Route::get('/holyQuran', function () {
    return view('quran.holyQuran');
});
```
## Nav
```
 <a href="/ontology/detail">Ontology</a>
 <a href="/holyQuran">The Holy Quran</a>
```

## view
### ontology
```
<!DOCTYPE html>
<html lang="en">
<head>
<title>Ontology</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}

@mixin breakpoint($point) {
   @if $point == desktop {
     @media (min-width: 70em) { @content ; }
  }
   @else if $point == laptop {
     @media (min-width: 64em) { @content ; }
  }
    @else if $point == tablet {
     @media (min-width: 50em) { @content ; }
  }
   @else if $point == phablet {
     @media (min-width: 37.5em)  { @content ; }
  }
  @else if $point == mobileonly {
     @media (max-width: 37.5em)  { @content ; }

  }
}

#demo,
#demo svg{
  width: 100%;
  @include breakpoint(laptop){
    //width: 64em;
  }
  @include breakpoint(phablet){
    //width: 37.5em;
  }
  max-width: 100%;
  margin: 0 auto;
  background-color: rgba(#ff0000, 0.2);
}

.topic{
  margin-left: 160px;
  text-align: center;;
  display: block;
  position: relative;
  z-index: 1;
	padding:.5em; 
	width: 25em;
	border:solid 1px black; 
	text-align:right; vertical-align: middle; white-space:nowrap; 
	background: pink;
}
.topic:before{
	content: ""; display: block; background: yellow; position: absolute; z-index: -1;
	top: 0; right: 0; bottom: 0; left: 0;
	margin:auto;
	width: 5em; height: 2.5em;
}

ul{
	display: inline-block; position:relative; overflow: hidden; z-index: -2; 
	left: -100%;
	margin:0 -100% 0 45%; padding:0; /*position */
	width: 100%;
	vertical-align: middle;
	background:rgba(255,0,0,.4);
}
ul>li{
	display:block; position: relative; float: right;
	margin:.25em 0; padding: .5em;	
	width:8em; height:auto; 
	vertical-align: top; white-space:normal; word-wrap: break-word;  text-align: center;
	background:rgba(0,0,0,.3); background: gray;
}
ul>li:before,
ul>li:after{
	content: ""; display:block; position: absolute; z-index: -1;
	border:solid white 0;
	width:0; height:20em;	
	top:0; right: 0; bottom:auto; left:0;
	margin: auto;	
}

ul>li:nth-child(even){
	float: left; clear: left;
}
ul>li:nth-child(even):before,
ul>li:nth-child(even):after{
	right: -45em; left:-37em; /*negative for overwidth ccenter*/
	border-width: 0 .2em 0 0;
}

ul>li:nth-child(odd){
	float: right; clear: right;
}
ul>li:nth-child(odd):before,
ul>li:nth-child(odd):after{
	right: -37em; left:-45em; /*negative for overwidth ccenter*/
	border-width: 0 0 0 .2em; 
}

/*select half even last-child*/
ul>li:nth-child(odd):nth-last-child(1),
ul>li:nth-child(odd):nth-last-child(2){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(1):before,
ul>li:nth-child(odd):nth-last-child(2):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(1):after,
ul>li:nth-child(odd):nth-last-child(2):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 1em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(1){ background:gold;  }
ul>li:nth-child(odd):nth-child(1):before{ display: block; width: 1em;}
ul>li:nth-child(odd):nth-child(1):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 1em; height: 1em; border-radius:0 0 0 1em; }

ul>li:nth-child(odd):nth-last-child(3),
ul>li:nth-child(odd):nth-last-child(4){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(3):before,
ul>li:nth-child(odd):nth-last-child(4):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(3):after,
ul>li:nth-child(odd):nth-last-child(4):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 2em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(3){ background:gold; }
ul>li:nth-child(odd):nth-child(3):before{ display: block; width: 2em;}
ul>li:nth-child(odd):nth-child(3):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 2em; height: 1em; border-radius:0 0 0 1em;}

ul>li:nth-child(odd):nth-last-child(5),
ul>li:nth-child(odd):nth-last-child(6){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(5):before,
ul>li:nth-child(odd):nth-last-child(6):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(5):after,
ul>li:nth-child(odd):nth-last-child(6):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 3em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(5){ background:gold; }
ul>li:nth-child(odd):nth-child(5):before{ display: block; width: 3em; }
ul>li:nth-child(odd):nth-child(5):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 3em; height: 1em; border-radius:0 0 0 1em;}

ul>li:nth-child(odd):nth-last-child(7),
ul>li:nth-child(odd):nth-last-child(8){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(7):before,
ul>li:nth-child(odd):nth-last-child(8):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(7):after,
ul>li:nth-child(odd):nth-last-child(8):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 4em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(7){ background:gold; }
ul>li:nth-child(odd):nth-child(7):before{ display: block; width: 4em; }
ul>li:nth-child(odd):nth-child(7):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 4em; height: 1em; border-radius:0 0 0 1em;}

ul>li:nth-child(odd):nth-last-child(9),
ul>li:nth-child(odd):nth-last-child(10){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(9):before,
ul>li:nth-child(odd):nth-last-child(10):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(9):after,
ul>li:nth-child(odd):nth-last-child(10):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 5em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(9){ background:gold; }
ul>li:nth-child(odd):nth-child(9):before{ display: block; width: 5em; }
ul>li:nth-child(odd):nth-child(9):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 5em; height: 1em; border-radius:0 0 0 1em; }

ul>li:nth-child(odd):nth-last-child(11),
ul>li:nth-child(odd):nth-last-child(12){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(11):before,
ul>li:nth-child(odd):nth-last-child(12):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(11):after,
ul>li:nth-child(odd):nth-last-child(12):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 6em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(11){ background:gold; }
ul>li:nth-child(odd):nth-child(11):before{ display: block; width: 6em; }
ul>li:nth-child(odd):nth-child(11):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 6em; height: 1em; border-radius:0 0 0 1em; }

ul>li:nth-child(odd):nth-last-child(13),
ul>li:nth-child(odd):nth-last-child(14){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(13):before,
ul>li:nth-child(odd):nth-last-child(14):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(13):after,
ul>li:nth-child(odd):nth-last-child(14):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 7em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(13){ background:gold; }
ul>li:nth-child(odd):nth-child(13):before{ display: block; width: 7em; }
ul>li:nth-child(odd):nth-child(13):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 7em; height: 1em; border-radius:0 0 0 1em; }

ul>li:nth-child(odd):nth-last-child(15),
ul>li:nth-child(odd):nth-last-child(16){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(15):before,
ul>li:nth-child(odd):nth-last-child(16):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(15):after,
ul>li:nth-child(odd):nth-last-child(16):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 8em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(15){ background:gold; }
ul>li:nth-child(odd):nth-child(15):before{ display: block; width: 8em; }
ul>li:nth-child(odd):nth-child(15):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 8em; height: 1em; border-radius:0 0 0 1em; }

ul>li:nth-child(odd):nth-last-child(17),
ul>li:nth-child(odd):nth-last-child(18){ background:lightblue; }
ul>li:nth-child(odd):nth-last-child(17):before,
ul>li:nth-child(odd):nth-last-child(18):before{ display: none; }
ul>li:nth-child(odd):nth-last-child(17):after,
ul>li:nth-child(odd):nth-last-child(18):after{ top:50%; bottom:auto; border-width: .2em 0 0 .2em; width: 9em; height:20em; border-radius:1em 0 0 0; }
ul>li:nth-child(odd):nth-child(17){ background:gold; }
ul>li:nth-child(odd):nth-child(17):before{ display: block; width: 9em; }
ul>li:nth-child(odd):nth-child(17):after{ top:auto; bottom:50%; border-width: 0 0 .2em .2em; width: 9em; height: 1em; border-radius:0 0 0 1em; }

/*left column*/
ul>li:nth-child(even):nth-last-child(2),
ul>li:nth-child(even):nth-last-child(1){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(2):before,
ul>li:nth-child(even):nth-last-child(1):before{ display: none; }
ul>li:nth-child(even):nth-last-child(2):after,
ul>li:nth-child(even):nth-last-child(1):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 1em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(2){ background:gold;  }
ul>li:nth-child(even):nth-child(2):before{ display: block; width: 1em;}
ul>li:nth-child(even):nth-child(2):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 1em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(4),
ul>li:nth-child(even):nth-last-child(3){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(4):before,
ul>li:nth-child(even):nth-last-child(3):before{ display: none; }
ul>li:nth-child(even):nth-last-child(4):after,
ul>li:nth-child(even):nth-last-child(3):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 2em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(4){ background:gold; }
ul>li:nth-child(even):nth-child(4):before{ display: block; width: 2em;}
ul>li:nth-child(even):nth-child(4):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 2em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(6),
ul>li:nth-child(even):nth-last-child(5){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(6):before,
ul>li:nth-child(even):nth-last-child(5):before{ display: none; }
ul>li:nth-child(even):nth-last-child(6):after,
ul>li:nth-child(even):nth-last-child(5):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 3em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(6){ background:gold; }
ul>li:nth-child(even):nth-child(6):before{ display: block; width: 3em; }
ul>li:nth-child(even):nth-child(6):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 3em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(8),
ul>li:nth-child(even):nth-last-child(7){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(8):before,
ul>li:nth-child(even):nth-last-child(7):before{ display: none; }
ul>li:nth-child(even):nth-last-child(8):after,
ul>li:nth-child(even):nth-last-child(7):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 4em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(8){ background:gold; }
ul>li:nth-child(even):nth-child(8):before{ display: block; width: 4em; }
ul>li:nth-child(even):nth-child(8):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 4em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(10),
ul>li:nth-child(even):nth-last-child(9){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(10):before,
ul>li:nth-child(even):nth-last-child(9):before{ display: none; }
ul>li:nth-child(even):nth-last-child(10):after,
ul>li:nth-child(even):nth-last-child(9):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 5em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(10){ background:gold; }
ul>li:nth-child(even):nth-child(10):before{ display: block; width: 5em; }
ul>li:nth-child(even):nth-child(10):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 5em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(12),
ul>li:nth-child(even):nth-last-child(11){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(12):before,
ul>li:nth-child(even):nth-last-child(11):before{ display: none; }
ul>li:nth-child(even):nth-last-child(12):after,
ul>li:nth-child(even):nth-last-child(11):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 6em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(12){ background:gold; }
ul>li:nth-child(even):nth-child(12):before{ display: block; width: 6em; }
ul>li:nth-child(even):nth-child(12):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 6em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(14),
ul>li:nth-child(even):nth-last-child(13){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(14):before,
ul>li:nth-child(even):nth-last-child(13):before{ display: none; }
ul>li:nth-child(even):nth-last-child(14):after,
ul>li:nth-child(even):nth-last-child(13):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 7em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(14){ background:gold; }
ul>li:nth-child(even):nth-child(14):before{ display: block; width: 7em; }
ul>li:nth-child(even):nth-child(14):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 7em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(16),
ul>li:nth-child(even):nth-last-child(15){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(16):before,
ul>li:nth-child(even):nth-last-child(15):before{ display: none; }
ul>li:nth-child(even):nth-last-child(16):after,
ul>li:nth-child(even):nth-last-child(15):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 8em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(16){ background:gold; }
ul>li:nth-child(even):nth-child(16):before{ display: block; width: 8em; }
ul>li:nth-child(even):nth-child(16):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 8em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(18),
ul>li:nth-child(even):nth-last-child(17){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(18):before,
ul>li:nth-child(even):nth-last-child(17):before{ display: none; }
ul>li:nth-child(even):nth-last-child(18):after,
ul>li:nth-child(even):nth-last-child(17):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 9em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(18){ background:gold; }
ul>li:nth-child(even):nth-child(18):before{ display: block; width: 9em; }
ul>li:nth-child(even):nth-child(18):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 9em; height: 1em; border-radius:0 0 1em 0; }

ul>li:nth-child(even):nth-last-child(20),
ul>li:nth-child(even):nth-last-child(19){ background:lightblue; }
ul>li:nth-child(even):nth-last-child(20):before,
ul>li:nth-child(even):nth-last-child(19):before{ display: none; }
ul>li:nth-child(even):nth-last-child(20):after,
ul>li:nth-child(even):nth-last-child(19):after{ top:50%; bottom:auto; border-width: .2em .2em 0 0; width: 10em; height:20em; border-radius:0 1em 0 0; }
ul>li:nth-child(even):nth-child(20){ background:gold; }
ul>li:nth-child(even):nth-child(20):before{ display: block; width: 10em; }
ul>li:nth-child(even):nth-child(20):after{ top:auto; bottom:50%; border-width: 0 .2em .2em 0; width: 10em; height: 1em; border-radius:0 0 1em 0; }

ul>li:after{  border-color:gray; }

/*decoration*/
.topic{ background: white; border: none; font-family: "Verdana"; }
.topic:before{ border-radius: 1em;	box-shadow:inset 0 0 .2em rgba(0,0,0,.5); border: solid rgba(0,0,0,.3) 1px; background: gold; }
ul{ background: white; }
ul>li{ box-shadow: inset 0 0 .2em rgba(0,0,0,.5); 	border-radius: .25em; }
ul>li:after{ }
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-ba w3-card" style="background-color: #006666; color: #ffff!important">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large">Quran.th</a>
    <a href="/quran/tafseer_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tafseer</a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register</a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in</a>
    <a href="/ontology" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ontology</a>
    <a href="/holyQuran" class="w3-bar-item w3-button w3-padding-large w3-hide-small">The Holy Quran</a>
    
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px; background-color: #006666; color: #ffff!important">
<a href="/" class="w3-bar-item w3-button w3-padding-large" >Quran.th</a> 
  <a href="/quran/tafseer_home" class="w3-bar-item w3-button w3-padding-large" >Tafseer</a>
  <a href="/home" class="w3-bar-item w3-button w3-padding-large" >Register</a>
  <a href="/home" class="w3-bar-item w3-button w3-padding-large" >Log in</a>
  <a href="/ontology" class="w3-bar-item w3-button w3-padding-large" >Ontology</a>
  <a href="/holyQuran" class="w3-bar-item w3-button w3-padding-large">The Holy Quran</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ONTOLOGY</h2>
    <p class="w3-opacity"><i></i></p>
    <div class="topic">
    QURAN
    
    <ul>	
      <li>
        <a href="/ontology/detail">Artifact</a>
      </li>
      <li>Astronomic</li>
      <li>Event</li>
      <li>False Deity</li>
      <li>Holy Book</li>
      <li>Language</li>
      <li>Living</li>
      <li>Location</li>
      <li>Physical Attribute</li>
      <li>Physical Substance</li>
      <li>Religion</li>
      <li>Weather</li>
      <li>Animal</li>
    </ul>
  </div>
  </div>
</div>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

/* function(d3) { */

var swatches = function(el) {
  var w = screen.width,
    h = screen.height;

  var circleWidth = 10;

  var palette = {
    "lightgray": "#819090",
    "gray": "#708284",
    "mediumgray": "#536870",
    "darkgray": "#475B62",
    "darkblue": "#0A2933",
    "darkerblue": "#042029",
    "paleryellow": "#FCF4DC",
    "paleyellow": "#EAE3CB",
    "yellow": "#A57706",
    "orange": "#BD3613",
    "red": "#D11C24",
    "pink": "#C61C6F",
    "purple": "#595AB7",
    "blue": "#2176C7",
    "green": "#259286",
    "white": "#fefefe",
    "yellowgreen": "#738A05"
  }

  var nodes = [{
    name: "D3"
  }, {
    name: "Core",
    target: [0]
  }, {
    name: "Scales",
    target: [0]
  }, {
    name: "SVG",
    target: [0]
  }, {
    name: "Time",
    target: [0]
  }, {
    name: "Time",
    target: [0]
  }, {
    name: "Geometry",
    target: [0]
  }, {
    name: "Geography",
    target: [0]
  }];

  var links = [];

  for (var i = 0; i < nodes.length; i++) {
    if (nodes[i].target !== undefined) {
      for (var x = 0; x < nodes[i].target.length; x++) {
        links.push({
          source: nodes[i],
          target: nodes[nodes[i].target[x]]
        })
      }
    }
  }

  var myChart = d3.select(el)
    .append('svg')
    .attr('width', w)
    .attr('height', h)

  var force = d3.layout.force()
    .nodes(nodes)
    .links([])
    .gravity(0.1)
    .charge(-1000)
    .size([w, h])

  var link = myChart.selectAll('line')
    .data(links).enter().append('line')
    .attr('stroke', palette.white)

  var node = myChart.selectAll('circle')
    .data(nodes).enter()
    .append('g')
    .call(force.drag);

  node.append('circle')
    .attr('cx', function(d) {
      return d.x;
    })
    .attr('cy', function(d) {
      return d.y;
    })
    .attr('r', circleWidth)
    .attr('stroke', function(d, i) {
      if (i > 0) {
        return palette.pink
      } else {
        return "transparent"
      }
    })
    .attr('stroke-width', 2)
    .attr('fill', function(d, i) {
      if (i > 0) {
        return palette.white
      } else {
        return "transparent"
      }
    })

  node.append('text')
    .text(function(d) {
      return d.name
    })
    .attr('font-family', 'Roboto Slab')
    .attr('fill', function(d, i) {
      if (i > 0) {
        return palette.mediumgray
      } else {
        return palette.white
      }
    })
    .attr('x', function(d, i) {
      if (i > 0) {
        return circleWidth + 20
      } else {
        return circleWidth - 15
      }
    })
    .attr('y', function(d, i) {
      if (i > 0) {
        return circleWidth
      } else {
        return 8
      }
    })
    .attr('text-anchor', function(d, i) {
      if (i > 0) {
        return 'beginning'
      } else {
        return 'end'
      }
    })
    .attr('font-size', function(d, i) {
      if (i > 0) {
        return '2em'
      } else {
        return '3.4em'
      }
    })

  force.on('tick', function(e) {
    node.attr('transform', function(d, i) {
      return 'translate(' + d.x + ', ' + d.y + ')';
    })

    link
      .attr('x1', function(d) {
        return d.source.x
      })
      .attr('y1', function(d) {
        return d.source.y
      })
      .attr('x2', function(d) {
        return d.target.x
      })
      .attr('y2', function(d) {
        return d.target.y
      })
  })

  force.start();

}('#demo');
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>
</html>
```
### Ontology Detail
```
<!DOCTYPE html>
<html lang="en">
<head>
<title>ONTOLOGY</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-ba w3-card" style="background-color: #006666; color: #ffff!important">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large">Quran.th</a>
    <a href="/quran/tafseer_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tafseer</a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register</a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in</a>
    <a href="/ontology" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ontology</a>
    <a href="/holyQuran" class="w3-bar-item w3-button w3-padding-large w3-hide-small">The Holy Quran</a>
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px; background-color: #006666; color: #ffff!important">
  <a href="/" class="w3-bar-item w3-button w3-padding-large" >Quran.th</a>
  <a href="/quran/tafseer_home" class="w3-bar-item w3-button w3-padding-large" >Tafseer</a>
  <a href="/home" class="w3-bar-item w3-button w3-padding-large" >Register</a>
  <a href="/home" class="w3-bar-item w3-button w3-padding-large" >Log in</a>
  <a href="/ontology" class="w3-bar-item w3-button w3-padding-large" >Ontology</a>
  <a href="/holyQuran" class="w3-bar-item w3-button w3-padding-large" >The Holy Quran</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">ARTIFACT : Ark of the convenant</h2>
    <p class="w3-opacity"><i></i></p>
    <p class="w3-justify" style="text-indent: 50px;">وَقَالَ لَهُمْ نَبِيُّهُمْ إِنَّ ءَايَةَ مُلْكِهِۦٓ أَن يَأْتِيَكُمُ ٱلتَّابُوتُ فِيهِ سَكِينَةٌۭ مِّن رَّبِّكُمْ وَبَقِيَّةٌۭ مِّمَّا تَرَكَ ءَالُ مُوسَىٰ وَءَالُ هَـٰرُونَ تَحْمِلُهُ ٱلْمَلَـٰٓئِكَةُ ۚ إِنَّ فِى ذَٰلِكَ لَـَٔايَةًۭ لَّكُمْ إِن كُنتُم مُّؤْمِنِينَ (2:248)</p>
  </div>
<!-- End Page Content -->
</div>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();
function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
</body>
</html>
```
### The Holy Quran
```
<!DOCTYPE html>
<html lang="en">
<head>
<title>The Holy Quran</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
</head>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-ba w3-card" style="background-color: #006666; color: #ffff!important">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right"  title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="/" class="w3-bar-item w3-button w3-padding-large">Quran.th</a>
    <a href="/quran/tafseer_home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tafseer</a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register</a>
    <a href="/home" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in</a>
    <a href="/ontology" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ontology</a>
    <a href="/holyQuran" class="w3-bar-item w3-button w3-padding-large w3-hide-small">The Holy Quran</a>
    <a class="w3-padding-large w3-hover-red w3-hide-small w3-right">
    <i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px; background-color: #006666; color: #ffff!important">
  <a href="/" class="w3-bar-item w3-button w3-padding-large" >Quran.th</a>
  <a href="/quran/tafseer_home" class="w3-bar-item w3-button w3-padding-large" >Tafseer</a>
  <a href="/home" class="w3-bar-item w3-button w3-padding-large" >Register</a>
  <a href="/home" class="w3-bar-item w3-button w3-padding-large" >Log in</a>
  <a href="/ontology" class="w3-bar-item w3-button w3-padding-large" >Ontology</a>
  <a href="/holyQuran" class="w3-bar-item w3-button w3-padding-large" >The Holy Quran</a>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">
  <!-- The Band Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">THE HOLY QURAN</h2>
    <p class="w3-opacity"><i></i></p>
    <p class="w3-justify" style="text-indent: 50px;">The Holy Quran is the most sacred book and the word of Allah that given to the prophet Muhammad through the angel Jibril, for the passed it on to his followers. So, the Quran is not a philosophy, poetry, literature, and sorcery, but is a warning from the Lord. The sublime language idioms of the Quran that makes a difference from any of the writings in the world, there is also a profound meaning in the Quranic verses containing questions, answers, warnings and challenges, which are incomparable and not to be  found in any other book in the world. 
The Holy Quran is the book that Allah guides humanity with a complete code of life. And the Quran teaches every aspect of human life which a person needs to know and study about . Being a Muslim, it is our belief that the learning of the Holy Quran is the primary and highly signified learning which is the solution to all problems and issues of our life. Allah(SWT) said :
Since We have sent you a messenger from among yourselves—reciting to you Our revelations, purifying you, teaching you the Book and wisdom, and teaching you what you never knew— 2:151
Islam religion gives importance to learning and encourages reading the Quran, which Allah prescribing many merits for who read the quran. When the Quran was revealed, its first word was “Iqra”, which means to read. However, knowing the meaning of the Quran is also essential to studying it.</p>
  </div>
</div>
<script>
</script>

</body>
</html>
```





