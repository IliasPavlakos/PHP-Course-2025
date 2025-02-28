<?php

$number = 1;

while ($number <= 100) {

    if($number == 31)
        break;

    if($number % 2 == 0){
        echo '<br/>';
    } else {
        echo $number;
    }

    $number++;
}