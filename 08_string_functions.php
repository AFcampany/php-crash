<?php

$string = 'hellow world';

echo strlen($string);
echo '<br>';

echo strpos($string , 'o');
echo '<br>';

echo strrpos($string  , 'o');
echo '<br>';

echo strrev($string);
echo '<br>';

echo strtolower($string);
echo '<br>';

echo strtoupper($string);
echo '<br>';

echo ucwords($string);
echo '<br>';

echo str_replace('world', 'planet', $string);
echo '<br>';

echo substr($string, 0, 5);
echo '<br>';

echo substr($string, 5);
echo '<br>';



// if(str_starts_with($string, 'hellow')){ echo 'YES';
// echo '<br>';
// } */*/*/*/*/* for php 8 */*/*/*/*/*/
// if(str_ends_with($string, 'world')){ echo 'YES';
// echo '<br>';
// }

$string2 = '<script alert(1)></script>';
echo htmlspecialchars($string2);
echo '<br>';
// printf('%s alert(1) %s', '<script>', '</script>');



?>