<?php
// Find the first occurrence of a string

// here strstr will look for @ form(hello@gmail.com) and will display @gmail.com  and will less the part (hello) of @
$string = 'hello@gmail.com';
echo strstr($string,'@');

echo '<br/>';
// if use true bulean then will display only (hello) from (hello@gmail.com) and less the part @gmail.com from (hello@gmail.com)
echo strstr($string,'@',true);

echo '<br/>';
// here strstr will look for @ form(hello@gmail.com) and will display @gmail.com  and will less the part (hello) of @
echo strstr($string,'@',false);
?>