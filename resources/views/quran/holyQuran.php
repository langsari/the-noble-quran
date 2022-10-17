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
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="" class="w3-bar-item w3-button w3-padding-large">Quran.th</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Tafseer</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Register</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Log in</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">Ontology</a>
    <a href="" class="w3-bar-item w3-button w3-padding-large w3-hide-small">The Holy Quran</a>
    
    <a href="javascript:void(0)" class="w3-padding-large w3-hover-red w3-hide-small w3-right"><i class="fa fa-search"></i></a>
  </div>
</div>

<!-- Page content -->
<div class="w3-content" style="max-width:2000px;margin-top:46px">

  <!-- The Head Section -->
  <div class="w3-container w3-content w3-center w3-padding-64" style="max-width:800px" id="band">
    <h2 class="w3-wide">THE HOLY QURAN</h2>
    <p class="w3-opacity"><i></i></p>
    <p class="w3-justify">The Holy Quran is the most sacred book and the word of Allah that given to the prophet Muhammad through the angel Jibril, for the passed it on to his followers. So, the Quran is not a philosophy, poetry, literature, and sorcery, but is a warning from the Lord. The sublime language idioms of the Quran that makes a difference from any of the writings in the world, there is also a profound meaning in the Quranic verses containing questions, answers, warnings and challenges, which are incomparable and not to be  found in any other book in the world. 
The Holy Quran is the book that Allah guides humanity with a complete code of life. And the Quran teaches every aspect of human life which a person needs to know and study about . Being a Muslim, it is our belief that the learning of the Holy Quran is the primary and highly signified learning which is the solution to all problems and issues of our life. Allah(SWT) said :
Since We have sent you a messenger from among yourselves—reciting to you Our revelations, purifying you, teaching you the Book and wisdom, and teaching you what you never knew— 2:151
Islam religion gives importance to learning and encourages reading the Quran, which Allah prescribing many merits for who read the quran. When the Quran was revealed, its first word was “Iqra”, which means to read. However, knowing the meaning of the Quran is also essential to studying it.</p>
    
  </div>

  <!-- The Tour Section -->
  <div class="w3-black" id="tour">
    <div class="w3-container w3-content w3-padding-64" style="max-width:800px">
      <h2 class="w3-wide w3-center">MIRACLE OF QURAN</h2>
      
      <body>
        <iframe width="750" height="360"
          src=""></iframe>
      </body>

    </div>
  </div>

</div>

<!-- Image of location/map -->
<img src="/w3images/map.jpg" class="w3-image w3-greyscale-min" style="width:100%">


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
