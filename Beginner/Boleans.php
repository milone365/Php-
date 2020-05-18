<?php

//(always ok) true, TRUE, True
$isLoaded=true;

if($isLoaded)
{
	echo "<h1>Hello</h1>";
}
else
{
	echo "<h1>Bye</h1>";
}
echo "<br>";

// we can use 0 / '0' for determinate negative bolean

$prova='0';
if(!$prova)
{
	echo "variable false";
}
?>