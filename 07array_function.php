<?php

$fruts = ['apple', 'orange', 'pear'];
// get length
echo count($fruts);
// Search array
var_dump(in_array('apple',$fruts));

// add to array 
$fruts[] = 'grape';

print_r($fruts);

// array_push($fruts , 'bluberry');
// array_unshift($fruts, 'strawberry');
// arrau_pop($fruts);
// array_shift($fruts);

// unset($fruts[1]);
var_dump($fruts);

var_dump(array_chunk($fruts, 3));

$arr = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr,$arr2);
var_dump($arr3);

// array_combine();

$a= ['1st','2nd','3ed','1st'];
$b = ['yopi','kabachino','banana','edward'];
$c = array_combine($a,$b);

var_dump($c);

$keys= array_keys($c);
print_r($keys);
$fliped = array_flip($c);
var_dump($fliped);

$numbers= range(1,3,0.1);
var_dump($numbers);

$str_numbers = array_map(fn($nb) => "${nb}" , $numbers );

var_dump($str_numbers);

var_dump(
 array_filter($str_numbers,
 fn($n) => strlen($n) == 3)
);


?>