<?php
//test to return array
function test()
{
	return [3,4,5,6];
}
$val=test();
print_r($val);
//sum two variables and return
function sum($v1,$v2)
{
	return $v1+$v2;
}
echo "<br>";
$result=sum(5,6);
echo $result;
echo "<br>";

//sum all insert parameter
function allparSum()
{
	//get args take all insert parameters, array_sum sum all element of array
	return array_sum(func_get_args());
}
$r=allparSum(4,5);
var_dump($r);
echo "<br>";
//exemple2
function example2()
{
	$res=0;
	//take all parameters, create array and use foreachlooop
	foreach(func_get_args()as $item)
	{
		$res-=$item;
	}
	return $res;
}

$roberto=example2(5,6,7,8,9);
var_dump($roberto);
echo "<br>";
//pass operator to the function_exists
function operator($op,...$args)
{
	$ret=0;
	switch($op)
	{
		
		case '+':$ret=array_sum($args);
		break;
		case '-':
		//ret became first element of array , $args[0];
		$ret=$args[0];
		//create a new array is a copy of args but start from second element, $args[1]
		$val=array_slice($args,1);
		//continue with foreach loop
		foreach($val as $v)
		{
			$ret-=$v;
		}
		break;
		case '/':
		//ret became first element of array , $args[0];
		$ret=$args[0];
		//create a new array is a copy of args but start from second element, $args[1]
		$val=array_slice($args,1);
		//continue with foreach loop
		foreach($val as $v)
		{
			$ret/=$v;
		}
		break;
		case '*':
		$ret=1;
		foreach($args as $a)
		{
			$ret*=$a;
		}
		break;
		default:
	$ret= null;
	
	}
	return $ret;
}
$newArray=array(2,4);
$a=operator('+',2,4);
echo $a;
echo "<br>";
//... = discompose the array 
$b=operator('+',...$newArray);
echo $b;
?>


