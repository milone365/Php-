<?php
//check if variable is null
if(!isset($name))
{
	echo " name don't exist";
}
?>
<hr>
<?php
// empty check
$name2="";
if(empty($name2))
{
	echo " name2 is empty";
}

?>
<hr>
<?php
// null check
$name3=null;
if(is_null($name3))
{
	echo " name3 is null";
}

?>