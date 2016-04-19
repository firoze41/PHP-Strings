
<?php
// Compare two strings using a "natural" algorithm (case-sensitive):
echo strnatcmp("2","3"); // 2-3 = - 
echo "<br>";
echo strnatcmp("3","2"); // 3-2= +
echo "<br>";
echo strnatcmp("hello","hello"); // hello - hello = 0
echo "<br>";
echo strnatcmp("hello","world"); // hello - world = - 1


?>

