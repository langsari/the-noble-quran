<?php

include ('db.php');

if (isset($_GET['id'])){
    $id = $_GET['id'];
$sql = "select name from videos where v_id='$id'";

$res = mysqli_query($con,$sql);

$row = mysqli_fetch_assoc($res);
$name = $row['name'];

echo "<h1>you are watching:".$name." </h1><br/>";

?>

    <video width="600" height="316" controls>
        
        <source src="videos/<?php  echo $name; ?>" 
                type="video/mp4">

    </video>

<?php
}

?>