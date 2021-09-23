<?php

include ('db.php');

$sql = "select * from videos";

$res = mysqli_query($con,$sql);

echo "<h1>MYVIDEOS</h1>";
while ($row = mysqli_fetch_assoc($res)) {
    
    $id = $row['id'];
    $name = $row['name'];

    echo  "<h4><a href='watch.php?v_id=$id' > ". $name . 
          "</a></h4><br/>";
}
?>
