<?php

$warning_message="";
// for enter button debug
if(isset($_POST["submit"]))
{	//make check for input fields
	$us= $_POST["username"];
	$pass=$_POST["password"];
	if(!$us&&$pass)
	{
		//$warning_message= "you forgot something";
		//echo $warning_message;
	}
}
else
{
	$warning_message= "enter button don't work";
	echo $warning_message;
}

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


//compile talbe
$test= mysqli_query($connectDB,"INSERT INTO user(username,password)VALUES('$us','$pass')");
if(!$test)
{
	echo "error".mysqli_error($connectDB);
}

//close database
mysqli_close($connectDB);

?>

<html>
<head>
<meta charset="utf8_encode">
<title>My Sql</title>
</head>
<body>
<div class ="container">
<h2 class="bg-success">My login page</h2>
<div class ="col-sm-6">
<!this page>
<form action="study.php" method="post">
<div class="form-group">
<label for="username">username</labe>
<input type="text"name="username"class="form-control">
</div>
<!create input fields>
<div class="form-group">
<label for="password">password</label>
<input type="password"name="password"class="form-control">
</div>
<!create butto for enter>
<input type="submit"name="submit"value="enter"class="btn btn-success">
</body>
</html>
