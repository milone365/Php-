<html>
<head>
<meta charset="utf8_encode">
<title>File manage</title>
</head>
<body>
<h1>fopen / fclose</h1>
<?php

//open / close files
$filename="miotesto.txt";
//if exist open file called miotesto, the file directory's have be to like this script
if(file_exists($filename))
{
	//r = reading mode
	$myfile=fopen($filename,"r");
	fclose($myfile);
	echo "file is found";
}
else
{
	echo "file not exist";
}


?>
<Hr>
<h1>fread</h1>
<?php
// 
$manageFile=fopen($filename,"r")or die("file can not be opened");
//create readable instance of loaded file
$contents=fread($manageFile,filesize($filename));
fclose($manageFile);
//print file contents
echo $contents;
?>
<Hr>
<h1>file_get_contents</h1>
<?php
//thi system is more rapid
$fileCon=file_get_contents($filename)or die("can not be possible open file");
echo $fileCon;

?>
</body>
</html>