
<?php
// Case insensitive string comparisons using a "natural order" algorithm
echo strnatcasecmp("2","3"); // 2-3 = - 
echo "<br>";
echo strnatcasecmp("3","2"); // 3-2= +
echo "<br>";
echo strnatcasecmp("hello","hello"); // hello - hello = 0
echo "<br>";
echo strnatcasecmp("hello","world"); // hello - world = - 1


?>