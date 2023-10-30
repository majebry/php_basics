<?php

$cars = [
    'BMW' => ['color' => 'red'], 
    'Audi' => ['color' => 'green'], 
    'Kia' => ['color' => 'black'], 
];

echo "<ul>";

foreach ($cars as $carName => $carProperties) {
    echo "<li>";
    echo $carName;
    echo ": ";
    echo $carProperties['color'];
    echo "</li>";
} 

echo "</ul>";