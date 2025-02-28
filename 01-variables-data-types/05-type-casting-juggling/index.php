<?php

$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null1 = null;

// Implicit

$result = $number1 + $number2;
var_dump($result);

$result = $number1 + $number2 + $number3; // int (string to int)
var_dump($result);

$result = $number3 + $number3; // int
var_dump($result);

$result = $number1 . $number3; // string
var_dump($result);

// $result = $fruit + $number1; // error

$result = $bool1 + $number1; // int (converts bool to int)
var_dump($result);

$result = $bool2 + $number1; // int (converts bool to int)
var_dump($result);

$result = $number1 + $null1; // int (converts null to int)
var_dump($result);


// Explicit
echo '<br/>';

$result = (string)$number1;
var_dump($result);

$result = (int)$number3;
var_dump($result);

$result = (bool)$number1;
var_dump($result);

$result = (bool)0;
var_dump($result);

$result = (bool)null;
var_dump($result);