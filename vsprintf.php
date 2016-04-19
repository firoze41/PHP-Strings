<?php
$a = 50;
$b = 'Bangladesh';
echo '<span>vsprintf</span> : '.vsprintf('<a href="%u">link</a> %s',array($a,$b)).'<br/>';
//  here $a = %u = 50 and $b = %s = Bangladesh

?>