<?php include("Conn.php");
$query="SELECT *FROM movie1 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $Movie=$result['name'];
echo "<a target=\"_top\" href=\"http://pagalbanaya.byethost3.com/Reindex.php?Movie=$Movie&L=https://moviesverse.org/?s=$Movie\"><img src=\"https://liwebsite.heliohost.org/3/Moviesflix/$Movie.jpg\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
