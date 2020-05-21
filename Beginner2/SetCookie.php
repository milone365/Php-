<h1>Set</h1>
<?php
//check cookie
if(!isset($_COOKIE['numberOfVisits']))
{
	setcookie('numberOfVisits',1);
}
else
{
	$total=$_COOKIE['numberOfVisits']+1;
	setcookie('numberOfVisits',$total);
}

//other wise
//header("Set-Coookie:numberOfVisits=1");
?>
<hr>
<h1>Read</h1>
<?php
echo "print number of visit when enter in the page. if refresh add 1" ."<br>";
foreach($_COOKIE as $name=>$value)
{
	echo "$name=$value<br>";
}
?>