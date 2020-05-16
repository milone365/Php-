<html>
<head>
<meta charset="utf8_encode">
<title>File manage</title>
</head>
<body>
<h1>F_write</h1>

<?php

//write files, if file is not black override 
$filename="miotesto.txt";
$fileManage=fopen($filename,"w")or die("impossible open the file");
fwrite($fileManage," Scrivi un'altra filastrocca")or die("i couldn't write");
//debug log
$content=file_get_contents($filename);
echo $content;
?>
<Hr>
<h1>F_put contents</h1>
<?php
//add content to our file
file_put_contents($filename," oppure una poesia",FILE_APPEND)or die(" wrating is falied");
//reload content
$content=file_get_contents($filename);
echo $content;

?>
</body>
</html>