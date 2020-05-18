<?php
$a=1;
$b=1;

//Spaceship
// if the value of c is 0, a=b. 
$c=$a<=>$b;
echo $c ."<br>";
//if the value of c is -1 a<b. 
$b=4;
$c=$a<=>$b;
echo $c."<br>";
//if the value of c is if is 1 a>b.
$b=-2;
$c=$a<=>$b;
echo $c."<br>";

$val=null;
$val2=null;

//null coalescing, return the first parameter not null
$res=$val??$val2??"third";
var_dump($res);
echo "<br>";
//assign variable to second element for return that
$val2="second";
$res=$val??$val2??"third";
var_dump($res);
echo "<br>";
$val="first";
//now return the dirst element
$res=$val??$val2??"third";
var_dump($res);
echo "<br>";
?>