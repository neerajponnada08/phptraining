<?php

$filename = "data.txt";
$obj = fopen($filename, "r");

$content = fread($obj, filesize($filename));

fclose($obj);

echo $content."\n";

?>