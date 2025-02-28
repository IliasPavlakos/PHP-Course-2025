<?php

session_start();

$_SESSION['name'] = 'Ilias';

if(isset($_SESSION['name'])){
    echo 'Hello ' . $_SESSION['name'];
}