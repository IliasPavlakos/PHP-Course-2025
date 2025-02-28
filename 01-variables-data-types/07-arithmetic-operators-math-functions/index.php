<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/

$output = 0;

$num1 = 10;
$num2 = 2;

$output = $num1 + $num2;
$output = $num1 - $num2;
$output = $num1 * $num2;
$output = $num1 / $num2;
$output = $num1 % $num2;

// Assignment
$num3 = 10;
//$num3 = $num3 + 10;
$num3 += 10;

// Build-in functions
$output = rand();
$output = getrandmax();
$output = rand(1,10);

// round()
$output = round(10.41);
$output = round(10.41, 1);

$output = ceil(10.41);

$output = floor(10.41);

// sqrt
$output = sqrt(10.41);

// pi
$output = pi();

// abs
$output = abs(-10.41);

// max
$output = max(1,2,3);
$output = max([1,2,3]);

// min
$output = min(1,2,3);
$output = min([1,2,3]);

// number_format
$output = number_format(1234567.191234, 2, '.', ',');

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
      <?= $output ?>
    </div>
  </div>
</body>

</html>