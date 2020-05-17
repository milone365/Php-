<?php

//connect to the database,we using xamp whit defaults values, (servername, username,password,database)
$connectDB=mysqli_connect("localhost","robo","1990","students");
if($connectDB)
{
	echo "";
}
else
{
	die("can not be possible connect to the database");
}

//load table from database
$test = mysqli_query($connectDB,"SELECT * FROM user");
if(!$test)
{
	die("user is null");
}
//close database
mysqli_close($connectDB);

?>

<html>
<head>
<meta charset="utf8_encode">
<title>Read Dates</title>
</head>
<body>
<?php
//mysqli_fetch_row-> return all array, 
////mysqli_fetch_row-> return all array whit associated description, 
while($line=mysqli_fetch_assoc($test))
{
?>
<!create easy to read test formattation> 
<pre>
<!print>
<?php print_r($line);?>
</pre>
<?php } ?>
</body>
</html>
