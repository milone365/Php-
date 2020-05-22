<h1>Visualize content folder</h1>
<pre>
<?php
//scan the under folder calld deepfolder
$dir='deepfolder/';
$d=scandir($dir);
//create iterator for navigate in folder
$d=new DirectoryIterator($dir);
//scan contents and print informations
foreach($d as $entry)
{
echo $entry->getFilename();
FileorDirectory($entry);

}

function FileorDirectory($entry)
{
	if($entry->isDir())
	{
		echo " is Directory ";
	}
	else
	{
		echo " is File ";
	}
	echo '('.$entry->getSize().')';
	echo "<br>";
}
?>
</pre>
