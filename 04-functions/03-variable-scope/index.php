<?php

// global scope

$name = "John";

//echo $name;


function sayHello() : void {

    // declare global to local scope
    global $name;

    // local scope
    echo 'Hello ' . $name;

}

sayHello();