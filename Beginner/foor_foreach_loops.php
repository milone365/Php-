<?php
for($i=0;$i<5;$i++)
{
	echo $i ."<br>";
}
echo "<br>";

$pizza=array("margherita",
			"diavola",
			"quattro formaggi", 
			"marinara");

//other lengage to different array name is first
//return array element as $p		
foreach($pizza as $p)
{
	echo $p ."<br>";
}
echo "<br>";

//create new more complessed array

$book=array("name"=>"Les Misérables"
			,"autor"=>"Victor Hugo",
			"age"=>"1862",
			"price"=>"12.90£");

//print keyword and dates
foreach($book as $key =>$data)
{
	echo "$key:$data"."<br>";
}

?>