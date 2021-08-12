<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Quran  </title>
    <body>

     
    
 <?php 
    include "header.php";
 
    include "koneksi.php";
    $tampil = mysqli_query($koneksi,"SELECT * FROM daftarsurah");
    while($data = mysqli_fetch_array($tampil)):
    
    ?>
    <div class="row text-center">
         <div class="col-sm">
    
        
        <button style="height: 150px; width:320px;  margin-top: 30px;

  margin-right: 10px;
  margin-left: 10px;
   margin-bottom: 10px;  "  type="buttom" class="btn btn-outline-info" >
        
            <a href="detail.php?surah=<?= $data['index']?>&nama_surah=<?=$data
            ['surah_indonesia'] ?>"><?= $data['surah_indonesia']?></a>
    <span></span>

    
    <?php endwhile; ?>
    
    </body>
    <div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    </div>
    </html>
