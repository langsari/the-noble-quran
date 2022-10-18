@extends('enduser.navuser')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Azkar Page1</title>
    <script>
let slideIndex = [1,1];
let slideId = ["mySlides1", "mySlides2"]
showSlides(1, 0);
showSlides(1, 1);

function plusSlides(n, no) {
  showSlides(slideIndex[no] += n, no);
}

function showSlides(n, no) {
  let i;
  let x = document.getElementsByClassName(slideId[no]);
  if (n > x.length) {slideIndex[no] = 1}    
  if (n < 1) {slideIndex[no] = x.length}
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  x[slideIndex[no]-1].style.display = "block";  
}
</script>
    <style>

        .space{
            margin: 0;
            padding: 0;
            background-color: white;
            padding-top: 80px;
            background-color: none;
        }
        
        .headazkar{
            display: flex;
            justify-content: center;
            background-color: none;
        }

        .headazkar .button{
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 20px 40px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        transition-duration: 0.4s;
        cursor: pointer;
        border-radius: 15px;
        }
        .headazkar .button1{
        background-color: #34495E; 
        color: white; 
        border: 2px solid #283747;
        }

        .headazkar .button1:hover {
        background-color: #FBFCFC;
        color: black;
        }
        * {
          box-sizing: border-box;
          background-color: ;
          
        }

        .mySlides2 {
          display: none;
        }
        img {
          vertical-align: middle;
        }
        /* Slideshow container */
        .slideshow-container {
          max-width: 500px;
          position: relative;
          margin: auto;
        }
        /* Next & previous buttons */
        .prev, .next {
          cursor: pointer;
          position: absolute;
          top: 50%;
          width: auto;
          padding: 16px;
          margin-top: -22px;
          color: white;
          font-weight: bold;
          font-size: 18px;
          transition: 0.6s ease;
          border-radius: 0 3px 3px 0;
          user-select: none;
        }
        /* Position the "next button" to the right */
          .next {
            right: 0;
            border-radius: 3px 0 0 3px;
          }
          /* On hover, add a grey background color */
          .prev:hover, .next:hover {
            background-color: #34495E;
            color: black;
          }
          .iframe .box{
            background-color: black;
            color: #FBFCFC;
            width: 100px;
            height: 50px;
          }
    </style>
</head>
<body>
    <div class="space"></div>
    <div class="headazkar">
    <button class="button button1">Azkar Nabawi</button><br>
    </div>
    <!-- <div class="slideshow-container"> 
  <div class="mySlides2">
    <img src="/img/1.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/2.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/3.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/4.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/5.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/6.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/7.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/8.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/9.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/10.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/11.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/12.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/13.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/14.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/15.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/16.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/17.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/18.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/19.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/20.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/21.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/22.jpg" style="width:100%">
  </div>
  <div class="mySlides2">
    <img src="/img/23.jpg" style="width:100%">
  </div>

  <a class="prev" onclick="plusSlides(-1, 1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1, 1)">&#10095;</a>
</div> -->
  <center>
  <iframe style='width:900px;height:500px' src='https://online.pubhtml5.com/hpnum/pyju/'  seamless='seamless' scrolling='no' frameborder='0' allowtransparency='true' allowfullscreen='true' ><span class="box">Azkar</span></iframe>
  </center>

</body>
</html>