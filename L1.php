
<?php include("Conn.php");
$query="SELECT *FROM movie2 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $Movie=$result['name'];
echo "<a target=\"_top\" href=\"http://pagalbanaya.byethost3.com/Reindex.php?Movie=$Movie&L=https://moviesflix.one/?s=$Movie\"><img src=\"https://liwebsite123.heliohost.us/Moviesflix/$Movie.jpg\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
