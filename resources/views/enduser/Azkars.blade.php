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
            background-color: #E5E7E9;
        }
        
        .headazkar{
            display: flex;
            justify-content: center;
            background-color: #E5E7E9;
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
        margin-bottom: 35px;
        margin-top: 30px;
        }

        .headazkar .button1:hover {
        background-color: #FBFCFC;
        color: black;
        }
        .py-12{
          background-color:#E5E7E9;
        }
    </style>
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












</body>
</html>