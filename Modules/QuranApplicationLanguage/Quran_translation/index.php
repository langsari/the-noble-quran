<html lang='en-US'>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
$sever="loaclhost";
$user="root";
$pass="";
$db="transliterataion";

$con=new mysqli($sever,$user,$pass,$db);

if($con -> connect_error){
         die("connection failed :".$con -> connect_error);
}
$con ->set_charset("utf8");

$sql= "SELECT * FROM eng";
$result=$con->query($sql);

if($result->num_rows>0){
    while($row=$result)
    echo $row['Transliterataion '].".".$row["Ayat"]."<br>";
}
else{
    echo"0 row";
}
$con->close();
?>

</body>
</html>