<h1>XML</h1>
<?php
$url='https://www.sitepoint.com/feed/';
$content=file_get_contents($url);
//open url
//echo $content;

$xml=simplexml_load_string($content);
//load code
//echo $xml->channel->title;
foreach($xml->channel->item as $item)
{
	echo $item->title;
	echo "<br>". $item->link;
}
?>

