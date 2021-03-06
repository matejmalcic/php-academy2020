<?php
// FOREACH LOOP
// Easier and most convenient way to iterate arrays (can also iterate objects, very useful)

$days = [
    'Monday' => 'workday',
    'Tuesday' => 'workday',
    'Wednesday' => 'workday',
    'Thursday' => 'workday',
    'Friday' => 'workday',
    'Saturday' => 'weekend',
    'Sunday' => 'weekend',
];

// Output keys and values
foreach($days as $day => $value) {
    echo $day, ': ', $value . '</br>';
}

// Output just values, ignore keys
foreach($days as $value) {
    echo $value . '</br>';
}

// Useful for extracting keys and values from array
var_dump(array_keys($days));
var_dump(array_values($days));

//https://www.w3resource.com/php-exercises/php-for-loop-exercises.php

// Task: Iterate your initial family tree, without specifying any names (using nested foreach loops)
// output each level of generation starting from yourself as h2 html tag, parents as h3 tag and grandparents as h4 tag

$familyTree = [
    'Tomislav' =>
        [
            'Robert' => ['Aleksandar', 'Ivanka'],
            'Nevenka' => ['Antun', 'Danica']
        ]
];

foreach($familyTree as $me => $parents) {
    echo "<h2>$me</h2>";
    foreach($parents as $parent => $grandparents) {
        echo "<h3>$parent</h3>";

        foreach($grandparents as $grandparent) {
            echo "<h4>$grandparent</h4>";
        }
    }
}

echo "<hr />";

// Task: Iterate alphabet, bold 14th letter.
// Task: Iterate alphabet, bold 14th and 17th letter, using in_array.
$bolded = 13;
$alphabet = 'a,b,c,d,e,f,g,h,i,j,k,l,m,n,o,p,q,r,s,t,u,v,w,x,y,z';
$alphabetArray = explode(',', $alphabet);
$alphabetCount = count($alphabetArray);
foreach ($alphabetArray as $loc => $letter) {
    if ($loc === $bolded) {
        echo'<b>' . $letter . '</b>';
    } else {
        echo $letter;
    }
}
