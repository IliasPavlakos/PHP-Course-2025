<?php

function add($a = 1, $b = 1) : int {
    return $a + $b;
}

//echo add(124,6919);

//echo add();


function addAll(...$args) : int
{
    return array_sum($args);
}

echo addAll(1,123,123,6,2,2,2,2,2);