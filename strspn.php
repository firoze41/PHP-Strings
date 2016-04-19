<?php

// Here Return the number of characters found in the string "Helloworld!" that contains the characters "Hello":
echo strspn("Helloworld","Hello");
echo '<br/>';

// will assign 2 to $var, because the string "42" is the initial segment of subject that consists only of characters contained within "1234567890".
echo strspn("420 is the answer to the 128th question.", "0123456789");
?>

<br/>
<?php
// strspn same as strlen but strspn can contain two strings for condition
$digits='0123456789'; 
$phone = '0123456789';// here strlen($phone) == 10
if (strlen($phone) == strspn($phone,$digits)){
	// here condition will be true that both variable lenght are same
	echo "legal characters";
	}
	else{
		echo "illegal characters";
	}
?>