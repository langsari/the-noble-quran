<?php
  
  
$server = "localhost";
$user= "root";
$password = "root";
$database = "dbquran";

// Create connection
$koneksi = mysqli_connect($server, $user, $password, $database) or die(mysqli_error($koneksi));
?>
