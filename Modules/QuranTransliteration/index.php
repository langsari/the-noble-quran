<html lang='en-US'>
<head>
<meta http-equiv="content-Type" content="text/html; charset=utf-8"/>
</head>
<body>
<?php
//connect database
$sever="loaclhost";
$user="root";
$pass="";
$db="transliterataion";

$con=new mysqli($sever,$user,$pass,$db);
//Check to connect database
if($con -> connect_error){
         die("connection failed :".$con -> connect_error);
}
$con ->set_charset("utf8");
//ดึงข้อมูลจาก database
$sql= "SELECT * FROM eng";
$result=$con->query($sql);
//Check row
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