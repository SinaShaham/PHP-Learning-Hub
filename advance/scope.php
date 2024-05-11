


<?php
// http://localhost/Project1/PHP-Learning-Hub/advance/scope.php


// Global Scope

$name = 'Alice'

function sayHello(){
    echo 'Hello' . $name;
}

echo $name;

//----------------------------------------------
// We get an error
// The fix is to write global $name in the function
//----------------------------------------------

?>