<!DOCTYPE html >
<html>
<head>
<title>video upload</title>
</head>
<body>

    <h1><a href="video.php">VIDEOS</a></h1>

<form  action="index.php" method="post"  
enctype="multipart/form-data">
<input type="file" name="file" />
<input type="submit" value="UPLOAD" name="upload" />

</form>
</body>
</html>

<?php
include ('db.php');

if (isset($_POST['upload'])){

$name = $_FILES['file']['name'];

$tmp = $_FILES['file']['tmp_name'];


move_uploaded_file($tmp,"videos/" . $name);

$sql = "INSERT INTO videos (name) VALUES ('$name')";

$res =  mysqli_query($con, $sql);

if ($res == 1){

    echo "<h1> video inserted successfully </h1>";
}
}
?>