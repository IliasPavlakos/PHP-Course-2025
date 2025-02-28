<?php

$number = [1,2,3,4,5,6,7,8,9];


$squaredNumbers = array_map(function ($number) {
    return $number * $number;
}, $number);

print_r($squaredNumbers);

echo '<br/>';


function applyCallback($callback, $value)
{
    return $callback($value);
}

$double = function ($value) {
    return $value * 2;
};

echo applyCallback($double, 15);