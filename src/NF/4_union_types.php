<?php

function sum( float|int $a , float|int $b): int|float
{
    return $a+$b;

}












function search(string $haystack, string $needle) : int | false
{
    $pos = strpos($haystack, $needle);
    if ($pos == -1){
        return false;
    }
    return $pos;
}