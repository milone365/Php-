<html>
<head>
</head>
<body>
<?php
//simple function
function explosion() {echo "BOOM";}
explosion();
echo "<br>";

//pass parameter to the function
function speak($message)
{echo $message;}
//create variable and pass to the function
$abc="abc";
speak($abc);
echo "<br>";
//pass string directly
speak("Hi");
echo "<br>";
//pass more parameters
function sum($a,$b)
{
	$c=$a+$b;
	echo $c;
}
sum(4,9);
?>
</body>
</html>