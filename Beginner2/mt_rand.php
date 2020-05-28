<?php
$names=['bobo','lovo','robo','momo'];
$lastnames=['nakamura','smith','bongo','lee'];

function getRandName($a,$b)
{
	$n=mt_rand(0,count($a)-1);
	$l= mt_rand(0,count($b)-1);
	return $a[$n].' '. $b[$l];
}
echo getRandName($names,$lastnames);
?>
