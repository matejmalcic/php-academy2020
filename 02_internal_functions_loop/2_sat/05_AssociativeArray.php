<?php 
include_once "04_Config.php";

$arr = [
    "id" => 1,
    "name" => "Pero"
];

echo $arr["name"], $b;

echo "<pre>";
print_r($arr);
echo "</pre>";

// Create array from string
explode(',', '1,2,3,4,5,6,7');

// Create string from array
implode(',', [1,2,3,4,5]);


