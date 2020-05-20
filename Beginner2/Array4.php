<h1>Array_pop/Push</h1>
<?php
$colors=['Red','Blue','Green'];
print_r($colors);
echo "<br>";
echo "Add 2" ."<br>";
array_push($colors,'Yellow','Violet');
print_r($colors);
echo "<br>";
array_pop($colors);
echo "Erase 1" ."<br>";
print_r($colors);
echo "<br>";
?>
<hr>
<?php
$c= array_shift($colors);
echo $c ."<br>";
echo array_unshift($colors,"Blue");
echo "<br>";
?>
<hr>
<?php
$fruit=['mango','orange','banana','lime','cocco'];
print_r($fruit);
echo "sort"."<br>";
sort($fruit);
print_r($fruit);
?>
<hr>
<h1>Array_Walk/Map</h1>
<?php
$arr=['a'=>'a','b'=>'b','c'=>'c'];
print_r($arr);
echo "<br>";
echo "make a function for every element of array";
echo "<br>";
//take attention to the parentesis
array_walk($arr,function(&$val,$key){$val=strtoupper($val);});
print_r($arr);
echo "<br>";
echo "now i using the array map";
echo "<br>";
?>
