<?php

$users = ['Bob', 'Steve', 'Donald'];

// For loop
for ($i = 0; $i < count($users); $i++) {
    echo 'User name is ', $users[$i], '<br>';
    // echo "The number is: ", $i, "<br>";
}

// ForEach loop
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
    echo "$value <br>";
}

// Recount values

$numbers = [1, 2, 3, 4, 5];

foreach ($numbers as $key => $value) {
    // $value += 1; // <- WRONG
    // echo $value, '<br>';
    $numbers[$key] += 10;
}

echo '<pre>';
print_r($numbers);
