<?php
$name="robo";
$addres="xxx";
$surname= "yyy";
//heredoc , allineate EOD on the first element 
$data= <<<EOD
		my $name is <br>
		my surname is  $surname<br>
		my address is $addres
EOD;

echo $data;
?>