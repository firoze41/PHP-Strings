<?php
// Search a string for any of a set of characters

$text = 'This is a Simple text.';

// this echoes "is is a Simple text." because 'i' is matched first
echo strpbrk($text, 'mi');

echo '<br/>';

// this echoes "Simple text." because chars are case sensitive
echo strpbrk($text, 'S');


echo '<br/><hr/>';
$timestamp = time();
$array_data = 'abcdefghijklmnopqrstuvwxyz'.$timestamp.'@gmail.com';

	echo (strpbrk($array_data,'w')).'<br/>';
?>