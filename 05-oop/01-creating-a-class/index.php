<?php

class User
{
    public string $name;
    public string $email;

    public function __construct(string $name, string $email){
        $this->name = $name;
        $this->email = $email;
    }

    public function login() : void
    {
        echo "The user '$this->name' logged in." . '<br/>';
    }
}

$user1 = new User('John Doe', 'john@doe.com');
$user2 = new User('Jane Wills', 'jane@wills.com');

$user2->login();
$user1->login();

