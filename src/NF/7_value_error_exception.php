<?php

$a = strpos("h", "hello world", 100);
var_dump($a);

$b = range(0,10, 15);
var_dump($b);

$r = array_rand([], 0);
var_dump($r);







//Throwable
//  ├── Error
//  │     ├── TypeError
//  │     ├── ValueError
//  │
//  └── Exception
//        ├── LogicException
//                ├── DomainException
//                ├── InvalidArgumentException
//                ├── LengthException
//                └── OutOfRangeException