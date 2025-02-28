<?php

class Article
{
    public $title;
    public $content;
    public $published = false;

    public function __construct($title, $content, $published = false)
    {
        $this->title = $title;
        $this->content = $content;
        $this->published = $published;
    }

    public function publish(): void
    {
        $this->published = true;
    }

    public function isPublished(): bool
    {
        return $this->published;
    }

}

$article1 = new Article('First post', 'This my first post');
$article1 = new Article('Second post', 'This my second post');

$article1->publish();

var_dump($article1);