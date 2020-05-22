<h1>Call Class and use funtion, include_once</h1>
<?php
include_once 'functios.php';
$date=['name'=>'Luigi','lastname'=>'Berlu'];
printData($date);
?>
<hr>
<h1>Show data/Include</h1>
<ul>
<?php
$arr=['Roma','Torino','Milano'];
//use include in foreach loop
foreach($arr as $data)
{
	include 'li.php';
}
?>
</ul>