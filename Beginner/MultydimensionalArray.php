<html>
<head>
<title>MultyArray</title>
</head>
<body>
<?php
//create array and generate variable for every parameter
$user=array("name"=>"Mattia Bianchi",
			"birth"=>"10/02/85",
			"hometown"=>"Milano",
			"sex"=>"male");
//create a multidimensional array

$students=array(
			//element 0
			array("name"=>"Mattia Bianchi",
			"birth"=>"10/02/85",
			"hometown"=>"Milano",
			"sex"=>"male"),
			//don't need semicoron but use comma
			//element 1
			array("name"=>"Marta Bianchi",
			"birth"=>"05/11/85",
			"hometown"=>"Roma",
			"sex"=>"female")
);
//call name variable, after make acces to the 1 element of the array
//and print it
echo "User Name: ".$students[1]["name"]."<br>"
?>
</body>
</html>