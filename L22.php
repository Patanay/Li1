<?php $x1=0;$i=1;
include("Conn.php");
$query="SELECT *FROM movie1 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==31){break;}$Movie=$result['name'];
echo $i.",".$Movie."<br/>";
$i++;
}
 $x1=0;
$query="SELECT *FROM movie2 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==31){break;} $Movie=$result['name'];
echo $i.",".$Movie."<br/>";
$i++;
}
$x1=0;
$query="SELECT *FROM movie3 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==21){break;}$Movie=$result['name'];
echo $i.",".$Movie."<br/>";
$i++;
}
$x1=0;
$query="SELECT *FROM movie4 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==21){break;}$Movie=$result['name'];
echo $i.",".$Movie."<br/>";
$i++;
}
?>
