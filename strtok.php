<?php
// strtok will be used for line break this is like wordwrap 


$string = "This is\tan example\nstring";
/* Use tab and newline as tokenizing characters as well  */
$tok = strtok($string, " \n\t");


//here  !==	 is  Not identical	$x !== $y	Returns true if $x is not equal to $y, or they are not of the same type
$i=0;
while ($tok !== false) {
	$i++;
    echo "$i=$tok<br />";
    $tok = strtok(" \n\t");
}
?>

<br/>
<?php
// strtok example
$str = 'Example to all of Ukraine';
echo strtok($str, ' ');
?>

<br/><hr/>
<?php
// strtok example
$str = 'Hello to all of Ukraine';

$strtok = strtok($str, ' ');

echo '<br/>';
while($strtok !== false){
	echo "$strtok<br/>";
	$strtok = strtok(' ');
}



// here  === is Identical	$x === $y	Returns true if $x is equal to $y, and they are of the same type
$x = '10';
$y = '10';
if($x === $y){
	echo 'x and y are same';
}

?>