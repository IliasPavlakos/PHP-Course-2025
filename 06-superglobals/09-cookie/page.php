<?php

$username = $_COOKIE['username'] ?? null;

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <title>PHP Cookies</title>
</head>

<body>
  <h1>Welcome <?=  $username ?? 'Guest' ?></h1>
  <a href="destroy.php">Delete cookie</a>
</body>

</html>