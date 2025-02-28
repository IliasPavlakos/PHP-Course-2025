<?php

$host = "localhost";
$port = 3306;
$dbname = 'blog';
$user = 'root';
$pass = '';

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";

try {
    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

    echo "Database connected successfully";

} catch (PDOException $e) {
    print $e->getMessage();
}