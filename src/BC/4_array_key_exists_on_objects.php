<?php

//$array = [-5 => '-5'];
//$array[] = '-4';
//
//var_dump($array);

$object = new class {
    public int $count = 0;
};
var_dump(array_key_exists( 'count', $object));