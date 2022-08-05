<?php error_reporting(0);
$Name = $_POST['Name'];if($Name==""){}else{
$str=rtrim($Name,",");
include("Conn.php");
$sql1="TRUNCATE TABLE movie1";
pg_query($conn,$sql1);
$sql="INSERT INTO movie1(Name) VALUES ".$str."";pg_query($conn,$sql);}
header('Location:https://pagalban.000webhostapp.com/A3/Li31.php');

?>
