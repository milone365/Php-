<h1>Global</h1>
<?php
$data=['letters'=>'abc','numbers'=>'123'];
function readGlobal()
{
	//with global we can read extern of function element
	global $data;
	var_dump($data);
	echo "<br>";
	//with global we can modify imported element
	$data['letters']='def';
	var_dump($data);
}
readGlobal();
?>
<hr>
<h1>Example2</h1>
<?php
$val="test";
function gb($val=null)
{
	var_dump($val);
}
function gb2($val=null)
{
	//is global then don't take jane2 but take test from out
	global $val;
	var_dump($val);
}
gb("jane");
echo "<br>";
echo "is global then don't take jane2 but take test from out"."<br>";
gb2("jane2");
?>

