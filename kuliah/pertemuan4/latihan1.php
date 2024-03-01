<?php
// DATE FUNCTION - BUILT-IN FUNCTION
echo date('d');
echo "<br>";
echo date('l');
echo "<br>";
echo date('j/n/Y');
echo "<br>";
echo date('l, j F Y');
// DATE FORMAT LIST
// https://www.php.net/manual/en/datetime.format.php


echo "<br>";
echo time();
echo "<br>";
echo date("l", time() + 10 * 60 * 60 * 100);
echo "<br>";
echo date("F", time() + 24 * 60 * 60 * 100);
echo "<br>";
echo mktime(0, 0, 0, 2, 27, 2024);
echo "<br>";
echo date("l", mktime(0, 0, 0, 10, 24, 2005));

// USER DEFINED FUNCTION
?>