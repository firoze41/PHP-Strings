<?php
// substr Return a part of a string

$string = 'firoze@gmail.com';

// here substr will display the part (firoze@gmail) of  (firoze@gmail.com)  before (.com)
echo substr($string,0,strpos($string,'.'));

echo '<br/>';

// here strpos will count before (.com) 
echo strpos ($string,'.');
echo '<br/>';

// here strpos will count before (@) 
echo strpos ($string,'@');


echo '<br/>';

// here substr will display the part (.com) of (firoze@gmail.com) after (firoze@gmail)
echo substr($string,strpos($string,'.'));

?>