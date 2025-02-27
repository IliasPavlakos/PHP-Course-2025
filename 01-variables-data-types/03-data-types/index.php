<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/



// String
$name = 'Ilias';
var_dump($name);
echo '<br>';

// Integer
$age = 26;
var_dump($age);
echo '<br>';

// Float
$rating = 4.5;
var_dump($rating);
echo '<br>';

// Boolean
$available = true;
var_dump($available);
echo '<br>';

// Array
$friends = [ 'John', 'Jack' ];
var_dump($friends);
echo '<br>';

// Object
$person = new stdClass();
var_dump($person);
echo '<br>';

// NULL
$car = null;
var_dump($car);
echo '<br>';

// Resource
$file = fopen('sample.txt', 'r');
var_dump($file);
echo '<br>';

