<?php
if($_SERVER['REQUEST_METHOD']=='POST')
{
	$i=0;
	while($i<count($_FILES['upfile']['name']))
	{
move_uploaded_file($_FILES['upfile']['tmp_name'][$i],"./Moviesflix/".$_FILES['upfile']['name'][$i]);
$i++;
	}
}
if($_SERVER['REQUEST_METHOD']=='POST')
{
        $i=0;
	while($i<count($_FILES['Moviesflix']['name']))
	{
move_uploaded_file($_FILES['Moviesflix']['tmp_name'][$i],"./Moviesflix1/".$_FILES['Moviesflix']['name'][$i]);
$i++;
	}
}
?>
<h1>Movie file upload</h1>
<form method="POST" enctype="multipart/form-data">
	<input type="file" name="upfile[]" multiple>
	<input type="submit" name="submit" value="Hollywood Movie"><br><br>
	<input type="file" name="Moviesflix[]" multiple>
	<input type="submit" name="submit" value="Bollywood Movie">
</form>
