<!DOCTYPE html>
<html>
<title>The Noble Quran</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="tablestyle.css">
<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
    <a href="#home" class="w3-bar-item w3-button">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> ABOUT</a>

    </a>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">ABOUT</a>

  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">

  </div>
</div>
<div class="chapter-list">
<div >
<?php include 'conn.php';?>
<div class="container" role="tablist">
  <ul class="nav nav-tabs">
    <li>
    <a class="nav-link active" data-toggle="tab" href="#chapters" role="tab" aria-selected="true" aria-controls="chapters" id="chapters-tab" tabindex="0" data-controller="track" data-name="chapters-tab" data-category="chapters">
          <span class="ar">سورة</span></a>
    </li>
    <li>
    <a class="nav-link active" data-toggle="tab" href="#chapters" role="tab" aria-selected="true" aria-controls="chapters" id="chapters-tab" tabindex="0" data-controller="track" data-name="chapters-tab" data-category="chapters">
          <span class="ar">الجزء</span></a>
    </li>
  </ul>
<table class="container">
  <tr>
    <th width="20"> <div align="center">ID </div></th>
    <th width="50"> <div align="center">Name</div></th>
    <th width="50"> <div align="center">Type </div></th>
    <th width="20"> <div align="center">Verses </div></th>
    <th width="20"> <div align="center">Page </div></th>
    <th width="50"> <div align="center">Read </div></th>
  </tr>
<?php
while($result=mysqli_fetch_array($query,MYSQLI_ASSOC))
{
?>
  <tr>
    <td align="center"><?php echo $result["ID"];?></td>
    <td align="center"><?php echo $result["name"];?></td>
    <td align="center"><?php echo $result["type"];?></td>
    <td align="center"><?php echo $result["verses"];?></td>
    <td align="center"><?php echo $result["page"];?></td>
    <td align="center"><a href="edit.php?ID=<?php echo $result["ID"];?>">Read</a></td>
  </tr>
<?php
}
?>
</table>
</div>
</div>
<?php
mysqli_close($conn);
?>
</div>








 
<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}

// Change style of navbar on scroll
window.onscroll = function() {myFunction()};
function myFunction() {
    var navbar = document.getElementById("myNavbar");
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
        navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
    } else {
        navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
    }
}

// Used to toggle the menu on small screens when clicking on the menu button
function toggleFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
