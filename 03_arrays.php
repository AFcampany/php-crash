<?php

// simple Array
$numbers = [1,2,3];
$fruits = array('apple', 'orange', 'rear');

var_dump($fruits);

echo $numbers[2];

//  associative array

$hex = [
    'red' => '#f00',
    'blue' => '#0f0',
    'green' => '#00f'
];

echo $hex['red'];

$person = [
    'first_name' => 'brad',
    'last_name' => 'Traversy',
    'email' => 'brad@gmail.com'
];

echo $person['first_name'];
echo $person['bla'];
var_dump($person['bla']);

$persons = [
    [
        'first_name' => 'brad',
        'last_name' => 'Traversy',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'john',
        'last_name' => 'doe',
        'email' => 'brad@gmail.com'
    ],
    [
        'first_name' => 'jan',
        'last_name' => 'kirishtain',
        'email' => 'brad@gmail.com'
    ]
];

echo $persons[1]['email'];
var_dump($persons);
$string_json_presons = json_encode($persons);
var_dump($string_json_presons);

$json_decode_persons = json_decode($string_json_presons);

var_dump($json_decode_persons);

// $assosiative_array_person = json_decode($json_decode_persons); false
// var_dump($assosiative_array_person);

?>