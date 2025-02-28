<?php
$output = null;

$user = [
        'name' => 'John',
    'email' => 'john@example.com',
    'password' => '123456789',
    'hobbies' => ['tennis', 'video games']
];

$output = $user['name'];
$output = $user['email'];

//$output = $user['email2']; // error

$output = $user['hobbies'][0];

$user['address'] = '1234 Main St';
$output = $user['address'];

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