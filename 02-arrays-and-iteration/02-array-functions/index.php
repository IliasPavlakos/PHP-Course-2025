<?php
$output = null;

$ids = [10, 22, 43, 313, 244, 142];
$users = ['user2', 'user1', 'user3', 'user4'];

$output = count($ids);

sort($ids);
sort($users);

rsort($ids);
rsort($users);

array_push($ids, 100);
array_push($users, 'user7');

array_pop($ids);
array_pop($users);

array_shift($ids);
array_shift($users);

array_unshift($ids, 200);
array_unshift($users, 'user200');

//$ids = array_slice($ids, 0, 2);

array_splice($ids, 1, 1, 'New');
array_splice($users, 0, 0, 'New');

$output = array_sum($ids);

$output = array_search(22, $ids);

$output = in_array(22, $ids);

$tags = explode(',', 'tech, code, programming');
var_dump($tags);

echo '<br/>';

var_dump(implode(' |', $tags));

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
            <h2 class="text-xl font-semibold my-4">IDs Array:</h2>
            <p>
                <pre><?php print_r($ids) ?></pre>
            </p>
            <h2 class="text-xl font-semibold my-4">Users Array:</h2>
            <p>
            <pre><?php print_r($users) ?></pre>
            </p>
        </div>
    </div>
</body>

</html>