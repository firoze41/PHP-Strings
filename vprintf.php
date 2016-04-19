<?php

$number = 100;
$str = "unite state";
echo '<span></span>'.vprintf('%u %s',array($number,$str));
// here $number = %u and $str = %s 
// and vprintf also count all length like (strlen)

?>