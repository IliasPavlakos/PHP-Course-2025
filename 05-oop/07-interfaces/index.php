<?php

interface IContent
{
    public function edit();

    public function display();
}

class Article implements IContent {

    private $title;
    private $content;

    public function __construct($title, $content){
        $this->title = $title;
        $this->content = $content;
    }

    public function edit(){
        echo 'Editing the article';
    }

    public function display(){
        echo $this->title;
        echo '<br/>';
        echo $this->content;
        echo '<br/>';
    }
}

echo '<br/>';

$art1 = new Article('Title 1', 'Content 1');

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
        <?= $art1->display(); ?>
    </div>
  </div>
</body>

</html>