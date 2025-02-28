<?php

$names = array('John', 'Jack', 'Jill');
$numbers = [1,2,3,4,5,6,7,8,9];

function  inspect($value) : void
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

inspect($names);

inspect($numbers);


echo $names[1];
echo '<br>';

echo $numbers[6];
echo '<br>';

// add element
$numbers[9] = 10;
inspect($numbers);

$numbers[] = 11;
inspect($numbers);

$numbers[3] = 200;
unset($numbers[3]);
inspect($numbers);

$numbers = array_values($numbers);
inspect($numbers);

