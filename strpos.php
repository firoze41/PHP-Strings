<?php
// same to echo strcspn('hello@gmail.com','@');  and  echo strpos('hello@gmail.com','@');

// Find the position of the last occurrence of a substring in a string

// here strrpos will count of hello from (hello@gmail.com) before that part of (@)
echo strrpos('hello@gmail.com','@');

echo '<br/>';

echo strpos('hello@gmail.com','@');

?>