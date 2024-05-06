<?php

$food = 'noFood';
$return_value = match ($food) {
    'apple' => 'This food is an apple',
    'bar' => 'This food is a bar',
    'cake' => 'This food is a cake',
};

// A match expression must be terminated by a semicolon ;.
var_dump($return_value);

//                             |   match              |    switch/case

// comparison                  |     strict ===       |        loose ==
// return value                |     yes              |        No
// fall-through to later cases |     No               |        Yes
// exhaustiveness              |     Yes              |        No
