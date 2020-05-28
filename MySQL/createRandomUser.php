<?php

//connection to the database
$config=['host'=>'localhost','name'=>'robo','password'=>'1990','database'=>'students'];
//create sqli
$mysqli= new mysqli($config['host'],$config['name'],$config['password'],$config['database']);

function getRandName()
{
	//function for get random name
	$a=['bobo','lovo','robo','momo'];
	$b=['nakamura','smith','bongo','lee'];
	$n=mt_rand(0,count($a)-1);
	$l= mt_rand(0,count($b)-1);
	return $a[$n].' '. $b[$l];
}
function getPass()
{
	$a = mt_rand(0,1000);
	$b = mt_rand(0,1000);
	$c = mt_rand(0,1000);
	return $a+$b+$c;
}
function insert($tot,mysqli $con)
{
	 
	$id=mt_rand(0,110);
	$name=getRandName();
	$pass=getPass();
	//insert in to the table
	$sql='INSERT INTO user (id,username,password)VALUES';
	$sql.= "('$id','$name','$pass')";
	//check if the insert is true o false (succes or not)
	$res=$con->query($sql);
	if(!$res)
	{
		echo $con->error;
	}
}

//pass connection to the function
insert(1,$mysqli);
?>
