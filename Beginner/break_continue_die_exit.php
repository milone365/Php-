<html>
<head>
</head>
<body>
<?php
for($i=0;$i<5;$i++)
{
	if($i==2)
		continue;
	if($i==4)
		break;
	echo $i."<br>";
	
}
?>
// exit/die stop the page update processing
<hr>
<?php
echo "new example";
for($i=0;$i<5;$i++)
{
	
	if($i==4)
		die("Stop"); 
	echo $i."<br>";
	
}
?>
<hr>
<?php
for($i=0;$i<5;$i++)
{
	
	if($i==4)
		exit; 
	echo $i."<br>";
	
}
?>
</body>
</html>