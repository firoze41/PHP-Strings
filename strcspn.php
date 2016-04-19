

<?php
// strcspn will only display(count) the (integer)counting of string
 echo strcspn('hello@gmail.com','.');
 
// echo strlen(trim('hello@gmail'));


echo '<br/>';


// substr will display the string
$substr =  substr('hello@gmail.com',0,strpos('hello@gmail.com','.'));

echo strlen(trim($substr));








?>