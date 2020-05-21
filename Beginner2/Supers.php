<h1>Server</h1>
<?php
var_dump($_SERVER['REMOTE_ADDR']);
echo "<br>";
var_dump($_SERVER['HTTP_USER_AGENT']);
echo "<br>";
echo $_SERVER['REQUEST_URI'];
?>
<hr>
<h1>Other grlobals</h1>
<?php
function test()
{
	echo '$_GET<br>';
	var_dump($_GET);
	echo '$_POST<br>';
	var_dump($_POST);
	echo '$_COOKIE<br>';
	var_dump($_COOKIE);
	echo '$_REQUEST<br>';
	var_dump($_REQUEST);
}
test();
?>