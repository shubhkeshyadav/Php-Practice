<?php
$file = file_get_contents("includes/text.xml");

$file = fopen("includes/text.xml",'r');

$content = '';

while(!feof($file))
{
    $content.=fgets($file);
}

$xml = simplexml_load_string($content);

echo '<pre>';
print_r($xml);

?>