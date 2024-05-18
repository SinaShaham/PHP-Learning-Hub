
<?php
// http://localhost/Project1/PHP-Learning-Hub/advance/inheritence.php

class User
{
    public $name;
    public $email;
    protected $status = 'active';

    public function __construct($name, $email)
    {
        $this -> name = $name;
        $this -> email = $email;
    }

    public function login()
    {
        echo $this->name . ' logged in </br>';
    }
}

class Admin extends User{
    public $level;
    public function __construct($name, $email, $level ){
        $this -> level = $level;
        parent::__construct($name, $email);
    }
}


$user1 = new User('sina', 'sina@gmail.com');
$user1 -> login();

$user2 = new Admin('mina', 'mina@gmail.com', 5);

echo $user2->name;

var_dump($user2);

?>