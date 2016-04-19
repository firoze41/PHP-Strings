<?php
// convert any element into uuencode like @ = !0``` ` 
echo $convert_uuencode = convert_uuencode('hello world!').'<br/><br/><hr/>';


// convert uuencode to uudecode make a string
$convert_uudecode = convert_uudecode ($convert_uuencode);

echo $convert_uudecode;

?>
