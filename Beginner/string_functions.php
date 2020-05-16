<html>
<head>
</head>
<body>
<?php
$message ="this is an apple";
//print normal
echo ($message). "<br>";
//print character number
echo strlen($message). "<br>";
//print word number
echo str_word_count($message). "<br>";
//print in upper
echo strtoupper($message). "<br>";
//print lower
echo strtolower($message). "<br>";
//sorbstitute word to
echo str_replace("apple","pinapple",$message). "<br>";
?>
</body>
</html>