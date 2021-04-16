<?php error_reporting(0);
$Name = $_POST['Name'];if($Name==""){}else{
$str=rtrim($Name,",");
include("Conn.php");
$sql1="TRUNCATE TABLE movie4";
pg_query($conn,$sql1);
$sql="INSERT INTO movie4(Name) VALUES ".$str."";pg_query($conn,$sql);}
header('Location: https://liwebsite1.herokuapp.com/Li2.php?sr=Liw');

?>
