<?php
// Arrays - lists of items (items being variables, constants, other arrays, objects, etc..)
// INDEX ARRAYS - numerical keys

$arr = array(2,3,4,5,5); //old syntax
var_dump($arr);

$arr = ['2',3,4,5,5]; // new syntax (same output)
var_dump($arr);

// array can contain arrays (multidimensional array)
var_dump([1,2,3, [1,2,3]]);

// count number of elements in array:
count($arr);

// first element (starts with 0)
echo $arr[0], PHP_EOL;

// last element (if we know it)
echo $arr[4];
// last element (if we dont know it)
echo $arr[count($arr)-1], PHP_EOL; //count numbers of array and substract by 1 because it's starts with 0
print_r($arr);

// Variable check (used with arrays primarily)
if(isset($arr[6])){
    echo 'IS SET KEY 6';
} elseif (isset($arr[3])){
    echo 'IS SET KEY 3';
}

//add element into array
$arr[] = 'Osijek';
echo $arr[count($arr)-1], PHP_EOL;
print_r($arr);

// Task: Make var_dump that outputs array that contains list of 1 of each: integer, string, constant, array, array that has 2 arrays inside
const TEST123 = 'test1234';
$testArr = [
    1,
    'string',
    TEST123,
    [],
    [[1234], ['stringtest']]
];

var_dump($testArr);

in_array('string', $testArr, true);
in_array('string2', $testArr, true);