<?php
// trim only look for real string and it less whitespace
$a = '  pm      '; // here $a = ' pm ';   before (with pm) pm is right=rtrim and after m (with m)left=ltrim

echo 'Total Count length : '.strlen($a);

echo '<br/>';

echo 'This is trim : '.strlen(trim($a));

echo '<br/>';

echo 'This is left trim = ltrim : '.strlen(ltrim($a));

echo '<br/>';

echo 'This is right trim = rtrim : '.strlen(rtrim($a));


?>