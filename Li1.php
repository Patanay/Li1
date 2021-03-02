<?php error_reporting(0);
$More=$_GET['More'];
if($More==1){
echo"<h1><font color=\"#808080\"><u>ALL HOLLYWOOD MOVIES & SEASONS : </u></font></h1>";
$dirpath = "./Moviesflix";$files = array();
$files = glob($dirpath . "/*.jpg");
usort($files, function($x, $y) {
    return filectime($x) < filectime($y);
});
foreach($files as $image){
    $Bolly=str_replace("./Moviesflix/","",$image); $Movie=str_replace(".jpg","",$Bolly);
  echo "<a target=\"_top\" href=\"http://pagalbanaya.byethost3.com/Reindex.php?Movie=$Movie&L=https://moviesverse.net/?s=$Movie\"><img src=\"https://liwebsite1.herokuapp.com/Moviesflix/$Bolly\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
}
if($More==2){
echo"<h1><font color=\"#808080\"><u>ALL BOLLYWOOD & SOUTH MOVIES & SEASONS : </u></font></h1>";
$dirpath = "./Moviesflix1";$files = array();
$files = glob($dirpath . "/*.jpg");
usort($files, function($x, $y) {
    return filectime($x) < filectime($y);
});
foreach($files as $image){
    $Bolly=str_replace("./Moviesflix1/","",$image); $Movie=str_replace(".jpg","",$Bolly);
  echo "<a target=\"_top\" href=\"http://pagalbanaya.byethost3.com/Reindex.php?Movie=$Movie&L=https://moviesflix.one/?s=$Movie\"><img src=\"https://liwebsite1.herokuapp.com/Moviesflix1/$Bolly\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
}
?>
<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=utf-8/">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1"/>
<meta name="description" content="Only 21 Movies" />
<meta name="keywords" content="liwebsite, li website, liwebsite123, livewebsite, li-website, liwebsite-moviesflix, lipower" /> 
<title>Only 21 Movies</title></head>
<body>
<h1 align="center"><font face="serif">-: Comment Box:-</font></h1><h3 align="center">
<form action="https://pagalbanay.000webhostapp.com/Go.php" method="POST">
<font face="serif">Name</font> &nbsp;&nbsp;&nbsp; : <input type="text" maxlength="30" size="21" name="N" value="" required /><br><br>
<font face="serif">Comment</font> &nbsp; : <input type="text" maxlength="50" size="25" name="C" value="" required /><br><br>
<input type="hidden" name="url" value="<?php echo "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>"/>
<input type="submit" value="SUBMIT"/>
</form></h3><br>
<iframe src="https://pagalbanay.000webhostapp.com/R2.html" style="border:none;" height="200" width="300"></iframe>
<hr width="50%px">
<h1><font color="#0000ff"><u>Only 21 Movies</u></font></h1>
<h3><font color="#00ff00">SEARCH FOR </font><a target="_top" href="http://liwebsite.heliohost.org/Search.php">CLICK HERE >></a></h3>
<h3><font color="#ff0000">DOWNLOAD FOR CLICK PICTURE</font></h3>
<h1><font color="#808080"><u>HOLLYWOOD MOVIES & SEASONS : </u></font></h1>
<?php $x1=0;
$dirpath = "./Moviesflix";$files = array();
$files = glob($dirpath . "/*.jpg");
usort($files, function($x, $y) {
    return filectime($x) < filectime($y);
});
foreach($files as $image){
$x1++;if($x1==15){break;}
    $Bolly=str_replace("./Moviesflix/","",$image);
 $Movie=str_replace(".jpg","",$Bolly);
  echo "<a target=\"_top\" href=\"http://pagalbanaya.byethost3.com/Reindex.php?Movie=$Movie&L=https://moviesverse.net/?s=$Movie\"><img src=\"https://liwebsite1.herokuapp.com/Moviesflix/$Bolly\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
<h2><font color="#00ff00">MORE MOVIES & SEASONS :</font><a target="_top" href="Li1.php?More=1">CLICK HERE >></a></h2><br/>
<h1><font color="#808080"><u>BOLLYWOOD & SOUTH MOVIES & SEASONS : </u></font></h1>
<?php $x1=0;
$dirpath = "./Moviesflix1";$files = array();
$files = glob($dirpath . "/*.jpg");
usort($files, function($x, $y) {
    return filectime($x) < filectime($y);
});
foreach($files as $image){
$x1++;if($x1==15){break;}
    $Bolly=str_replace("./Moviesflix1/","",$image);
 $Movie=str_replace(".jpg","",$Bolly);
  echo "<a target=\"_top\" href=\"http://pagalbanaya.byethost3.com/Reindex.php?Movie=$Movie&L=https://moviesflix.one/?s=$Movie\"><img src=\"https://liwebsite1.herokuapp.com/Moviesflix1/$Bolly\" width=\"140\" height=\"260\" alt=\"Download $Movie\"></img></a>&nbsp;";
}
?>
<h2><font color="#00ff00">MORE MOVIES & SEASONS :</font><a target="_top" href="Li1.php?More=2">CLICK HERE >></a></h2>
<h2><font color="#0000ff">JOIN TELEGRAM  GROUP @livewebsite</font></h2>
<span style="font-family:serif;"><p align="center"> Copyright &copy; 2016-2021 Liwebsite.All rights reserved.</p></span>
</body></html>