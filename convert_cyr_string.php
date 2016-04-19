<?php
/* 
    k - koi8-r
    w - windows-1251
    i - iso8859-5
    a - x-cp866
    d - x-cp866
    m - x-mac-cyrillic
*/


$convert_cyr_string = convert_cyr_string('hello world!','k','w');

echo ($convert_cyr_string);

?>