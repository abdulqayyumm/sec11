<?php

$arrayOfObjects = [
    [
        'id'   => 1,
        'name' => 'john',
        'age'  => 20
    ],
    [
        'id'   => 2,
        'name' => 'jane',
        'age'  => 21
    ],
    [
        'id'   => 3,
        'name' => 'jack',
        'age'  => 22
    ]
];

$arrayOfArray = array_combine(
                    array_column($arrayOfObjects, 'age'),
                    $arrayOfObjects
                );

print_r($arrayOfArray);