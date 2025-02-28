<?php

$add = fn ($a, $b) => $a + $b;

//echo $add(1, 2);

$numbers = [1, 2, 3];

$squaredNumbers = array_map(fn ($a) => $a * $a, $numbers);

print_r($squaredNumbers);