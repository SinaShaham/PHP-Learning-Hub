<?php
// http://localhost/Project1/PHP-Learning-Hub/advance/classes.php

class UserClass {

    // Properties
    public $name ;
    public $email ;

    // Constructor
    public function __construct($name, $email){
        $this -> name = $name;
        $this -> email = $email;
    }


    // Methods
    public function login(){
        echo 'The user logged in'.'</br>' ;
    }

}


// Instantiate a new object

$user1 = new UserClass('Sina', 'sina@gmail.com');

$user1 -> login();
//$user2 = new UserClass();
//$user2 -> name = 'john doe </br>';
//$user2 -> email = 'john@gmail.com';


var_dump($user1);
?>