<?php

// bin2hex
// Convert "any kind of elements" to hexadecimal values
// a=61,b=62 & 1=61,2=62
$bin2hex = bin2hex('aaa'); // output 616161
echo $bin2hex;
echo '<h2 style="color:#'.$bin2hex.'">hello world!</h2>';

?>