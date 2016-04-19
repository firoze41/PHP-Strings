

<?php
$year = date('Y');
$month = date('m');
$day = date('d');
if (!($fp = fopen('date.txt', 'w')))
    return;

  vfprintf($fp, "%04d-%02d-%02d", array($year, $month, $day));
// will write the formatted ISO date to date.txt
?>
<embed src="date.txt" type="" />

<br/><br/><br/>

<?php
$h = date('h')+5;
$i = date('i');
$s = date('s');
if (!($fp = fopen('time.txt', 'w')))
    return;

vfprintf($fp, "%4d-%2d-%2d", array($h, $i, $s));
// will write the formatted ISO time to time.txt
?>
<embed src="time.txt" type="" />