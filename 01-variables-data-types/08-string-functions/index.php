<?php
$output = null;

$string1 = 'Hello World';

$output = strlen($string1);

$output = str_word_count($string1);

$output = strpos($string1, 'World');

$output = $string1[4]; // o

$output = substr($string1, 6); // World

$output = str_replace('World', 'Universe', $string1);

$output = strtolower($string1);

$output = strtoupper($string1);

$output = ucwords($string1);

$output = trim('   Hello World ')

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>