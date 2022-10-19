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
