<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8/">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<meta name="description" content="Only 21 Movies" />
<meta name="keywords" content="liwebsite, li website, liwebsite123, livewebsite, li-website, liwebsite-moviesflix, lipower" /> 
<meta http-equiv="refresh" content="120">
<title>Only 21 Movies</title></head>
<body>
<h1><font color="#0000ff"><u>Only 21 Movies</u></font></h1>
<?php $sr=$_GET['sr'];?>
<h2><font color="#0000ff"># Movie On Demand </font><a target="_top" href="https://t.me/livewebsite">CLICK HERE >></a></h2>
<h3><font color="#00ff00">HOLLYWOOD SEARCH FOR </font><a target="_top" href="http://pagalbanay.orgfree.com/Search.php?sr=<?php echo $sr; ?>">CLICK HERE >></a></h3>
<h3><font color="#ff0000">DOWNLOAD FOR CLICK PICTURE</font></h3>
<h1><font color="#808080"><u>HOLLYWOOD MOVIES & SEASONS : </u></font></h1>
<?php $x1=0;
include("Conn.php");
$query="SELECT *FROM movie1 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==31){break;}$Movie=$result['name'];
echo "<a target=\"_top\" href=\"http://pagalbanay.000webhostapp.com/Reindex2.php?Movie=$Movie&L=1&sr=$sr\"><img src=\"https://liwebsite.heliohost.org/3/Moviesflix/$Movie.jpg\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?><!--
<h2><font 
color="#00ff00">MORE MOVIES & SEASONS :
</font><a 
target="_top" href="Li1.php?More=1">CLICK HERE >>
</a></h2> -->
<h1><font color="#808080"><u>BOLLYWOOD & SOUTH MOVIES & SEASONS : </u></font></h1>
<h2><font color="#0000ff"># Movie On Demand
 </font><a target="_top" href="https://t.me/livewebsite">CLICK HERE >></a></h2>
<h3><font color="#00ff00">BOLLYWOOD & SOUTH SEARCH FOR </font><a target="_top" href="http://pagalbana.orgfree.com/Search.php?sr=<?php echo $sr; ?>">CLICK HERE >></a></h3>
<?php $x1=0;
 include("Conn.php");
$query="SELECT *FROM movie2 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==31){break;} $Movie=$result['name'];
echo "<a target=\"_top\" href=\"http://pagalbanay.000webhostapp.com/Reindex2.php?Movie=$Movie&L=2&sr=$sr\"><img src=\"https://liwebsite123.heliohost.us/Moviesflix/$Movie.jpg\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
	<h1><font color="#0000ff"><u>POPULAR MOVIE ON WEEK</u></font></h1>
	<h1><font color="#808080"><u>HOLLYWOOD</u></font></h1>
<?php $x1=0;
include("Conn.php");
$query="SELECT *FROM movie3 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==21){break;}$Movie=$result['name'];
echo "<a target=\"_top\" href=\"http://pagalbanay.000webhostapp.com/Reindex2.php?Movie=$Movie&L=1&sr=$sr\"><img src=\"https://pagalbana.000webhostapp.com/Moviesflix/$Movie.jpg\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
<h1><font color="#808080"><u>BOLLYWOOD & SOUTH </u></font></h1>
<?php $x1=0;
include("Conn.php");
$query="SELECT *FROM movie4 ORDER BY id ASC ";
$data=pg_query($conn,$query);
while($result=pg_fetch_assoc($data))
{ $x1++;if($x1==21){break;}$Movie=$result['name'];
echo "<a target=\"_top\" href=\"http://pagalbanay.000webhostapp.com/Reindex2.php?Movie=$Movie&L=2&sr=$sr\"><img src=\"https://pagalbanaya.000webhostapp.com/Moviesflix/$Movie.jpg\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
	<!--
<h2><font 
color="#00ff00">MORE MOVIES & SEASONS :
</font><a 
target="_top" href="Li1.php?More=2">CLICK HERE >>
</a></h2> -->
<h2><font color="#0000ff">JOIN TELEGRAM  GROUP @livewebsite</font></h2>
<span style="font-family:serif;"><p align="center"> Copyright &copy; 2016-2021 Liwebsite.All rights reserved.</p></span>
</body></html>
