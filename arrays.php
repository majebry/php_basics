<?php

// Indexed Array
$myCars = [
    "BMW",
    "Audi",
    "Kia",
    true,
    12
];

$myCars[1] = "Mercedes";

// var_dump ($myCars);


$colors = [
    'green', 
    ['light blue', 'dark blue'], 
    'red'
];

echo $colors[1][1];

// var_dump($cars);


// ===================================================================

// Associative Arrays

$grades = [
    'hani' => 10,
    'musa' => 20,
    'ali' => 5
];

var_dump($grades);

// ===================================================================

// Multi-dimiontional Array

$grades = [
    'hani' => 10,
    'musa' => 20,
    'ali' => [5, 10, 20]
];