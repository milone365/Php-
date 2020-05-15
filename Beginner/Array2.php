<html>
<head>
<title>Array</title>
</head>
<body>
<?php
//create array and generate variable for every parameter
$user=array("name"=>"Mattia Bianchi",
			"birth"=>"10/02/85",
			"hometown"=>"Milano",
			"sex"=>"male");
//print calling variable of array
echo $user["birth"]."<br>";

//print all elements of attay
print_r($user);
// <br> go to next line
echo ""."<br>";
//is like print_r but return more informations
var_dump($user);
?>
</body>
</html>