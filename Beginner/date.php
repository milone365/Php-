<?php
//you can set time zone for example i want know 
//Los_Angeles's time
date_default_timezone_set('America/Los_Angeles');
?>
<html>
<head>
</head>
<body>
<?php
//H= hour ,i=minte ,s=secons, d=day, m=month,y/Y=year
echo "Now are ".date("H:i:s ")."today is:".date("d/m/Y");
echo "<br>";
//how use other lengage terms
$week=array("domenica","lunedi","martedi",
			"mercoldedi","giovedi","venerdi","sabato");
//print weekday in english l=day in letters
echo date("l");
echo "<br>";
//print in italian w= day in number
echo $week[date("w")];

?>
</body>
</html>