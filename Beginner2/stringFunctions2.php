<h1>StringFunctions2</h1>
<?php
echo "i have 3 strings : ". "<br>";
$name=" BOBO ";
$surname=" robo ";
$friend= " Lomo";
echo $name. "<br>" . $surname. "<br>" . $friend. "<br>";
echo "<br>";
?>
<hr>
<?php
echo "use string to lower, string to upper, string replace"."<br>";
echo strtolower($name);
echo "<br>";
echo strtoupper($surname);
echo "<br>";
$friend=str_replace('L','M',$friend);
echo $friend."<br>";
echo "<br>";
//find position of character/string in a string and get position
echo "using strpos : check if exist r in robo and return position;"."<br>";
echo strpos($surname,'r')."<br>";
?>
<hr>
<h1>Explode/Implode</h1>
<?php
//create array with explode function from string
$str='1,2,3,4,5';
$arr=explode(',',$str);
var_dump($arr);
echo "<br>";
//compose string with implode
$sayHi=['H','e','l','l','o'];
echo implode('',$sayHi);
echo "<br>";
//use join for insert character in a string
echo join('=',$sayHi);
?>
<hr>
<h1>Stripslashes</h1>
<?php
$car="Doblo/'";
echo stripcslashes($car);

//FOR CLEAN THE BUFFER
//ob_end_clean();
?>