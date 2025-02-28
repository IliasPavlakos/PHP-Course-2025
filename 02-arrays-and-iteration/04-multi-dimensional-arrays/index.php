<?php
$output = null;
//
//$fruits = [
//        ['apple','red'],
//        ['banana','yellow'],
//        ['orange', 'orange']
//];
//
//$output = $fruits[0][0];
//
//$fruits[] = ['grape', 'purple'];
//
//print_r($fruits);




$users = [
        ['name' => 'John', 'email' => 'john@example.com', 'password' => 'password123'],
    ['name' => 'Marry', 'email' => 'marry@example.com', 'password' => 'password123'],
    ['name' => 'Tim', 'email' => 'tim@example.com', 'password' => 'password123'],
];

$output = $users[1]['email'];

$users[] = ['name' => 'Kim', 'email' => 'kim@example.com', 'password' => 'password123'];

array_push($users, ['name' => 'Larry', 'email' => 'larry@example.com', 'password' => 'password123']);

print_r($users);


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
      <!-- Output -->
      <p class="text-xl"><?= $output ?></p>
    </div>
  </div>
</body>

</html>