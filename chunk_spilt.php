<?php


$string = 'hello world!';
$chunk_split = chunk_split($string,1,'@'); 
echo $chunk_split;

?>