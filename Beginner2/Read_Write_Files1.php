<h1>Create file</h1>
<pre>
<?php

//directory reference
$dir='deepfolder/';
//set file's name
$filename=$dir.'robowin.php';
//create file for write (w) 
$hd=fopen($filename,'w');
//override/write file if exist
if($hd)
{
	//write file
	fwrite($hd,'ciao a tutti');
	//close file
	fclose($hd);
}
else
{
	echo "fire is not founded";
}
//use append for add content to the end
$hd=fopen($filename,'a');
//override/write file if exist
if($hd)
{
	//write file
	fwrite($hd,', seconda funzione');
	//close file
	fclose($hd);
}
else
{
	echo "fire is not founded";
}
///Open file
$hd=fopen($filename,'r');
if($hd)
{
	//read file
	$content=fread($hd,filesize($filename));
	echo $content;
	//come back to the start of file
	rewind($hd);
	//more one reading function
	//$content ='';
	//while(!feof($hd)){$content .=fread($hd,1024);}
	//close file
	fclose($hd);
}
?>
</pre>
