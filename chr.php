<pre>
<?php
// this start from 34 - 127
//echo chr (61).'<br/>';
// 52-57 '4-9'
// 65-90 'A-Z'
// 97-122 'a-z'


$range = range(33,126);

$range_array = array($range);
//print_r($range_array);
//echo $range_array[0][0];


foreach($range_array as $key){
	$i =32;
	foreach($key as $value){
		$i++;
	echo $i.' is '. chr($value).'<br />';
}
}


/*   for($i = 33; $i<127;$i++){
	$chr = chr($i);
	echo $i.'----------- '. $chr.'<br/>';
} */ 
?>

</pre>