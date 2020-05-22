<h1>Visualize content folder</h1>
<pre>
<?php
//scan the under folder calld deepfolder
$dir='deepfolder/';
$d=scandir($dir);
//
foreach($d as $entry)
{
	/*if($entry==='.'||$entry==='..'){continue;}
    var_dump(is_dir($dir.$entry));
    var_dump(is_file($dir.$entry));
    echo $entry."<br>";
	echo "-----------------------------------------------------"."<br>";*/
$a=dir($dir);
echo "Handle: " .$a->handle . "\n";
echo "Path: " .$a->path . "\n";
while(false!==($entry=$a->read())){echo $entry."\n";}
$a->close();
}
?>
</pre>
