<?php
$name="robo";
$addres="xxx";
$surname= "yyy";
$arr=array(0,1);
//create object class
$obj= new stdClass();
//create variable name
$obj->name='jim';

//heredoc , allineate EOD on the first element of the line
$data= <<<EOD
		my name is $name <br>
		my surname is  $surname<br>
		my address is $addres $arr[1] <br>
		{$obj->name}
EOD;

echo $data;

?>