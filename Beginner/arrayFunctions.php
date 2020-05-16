<html>
<head>
</head>
<body>
<?php
$fruit =array ("apple","orange", "banana", "amond","aprichot");
$flower=array("rose","tulipan","violet");
// create single array and print it
$products=array_merge($fruit,$flower);
print_r($products);
echo "<br>";
//return cont of elements
echo count($fruit);
echo "<br>";
//count specific item (there are 5 apple)
$fruit2 =array ("apple","apple",
"orange", "banana","apple","apple","apple");
//count value function
$C=array_count_values($fruit2);
//print nymber of apples ( 5 )
echo $C["apple"];
echo "<br>";
//search in array element using if (in_array)
if(in_array("violet",$flower))
{
	echo "True";
	echo "<br>";
}
//add element to the end
array_push($fruit,"strawberry");
var_dump($fruit);
echo "<br>";
//delete element from 0 to 4
//add new array in position 0
array_splice($products,0,4,array("chocolate","honey"));
print_r($products);
echo "<br>";
//sort in alphabetic order
sort($products);
print_r($products);
?>
</body>
</html>