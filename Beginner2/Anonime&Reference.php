<h1>Anonime functions</h1>
<?php
//variable funtions ,anonime functions
$sum =function($a,$b){return $a+$b;};

//use anonime function example
//create array
$arr=[2,4,6];
//create function, (duplicate number function) &==pass ref
$double=function(&$val){($val*=2)."<br>"; };
//automaticle pass array in a function whit a_w
array_walk($arr,$double);
print_r($arr)
?>
<hr>
<h1>Parameter for value</h1>
<?php

//array
$data=['name'=>'John (array)','lastname'=>'Dow'];
//object
$obj=new stdClass();
$obj->name='John (class)';
$obj->lastname='Dow';
//scalar
$name='John Dow (variable)';
//print all name values for test
echo $data['name'];
echo "<br>";
echo $obj->name;
echo "<br>";
echo $name;
echo "<br>";

//ABSOLUTLY PASS REFERENCE (&) LIKE PARAMETER
function modifyVal(&$v)
{
	if(is_object($v))
	{
		$v->name='Bobo (Class)';
	}
	else if(is_array($v))
	{
		$v['name']='Lolo (array)';
	}
	else
	{
		$v='Robo (var)';
	}
	
}
?>
<hr>
<h1>//ABSOLUTLY PASS REFERENCE (&) LIKE PARAMETER</h1>

<h2>...after change</h2>
<?php
modifyVal($data);
var_dump($data['name']);
echo "<br>";
modifyVal($obj);
var_dump($obj->name);
echo "<br>";
modifyVal($name);
var_dump($name);
echo "<br>";
?>