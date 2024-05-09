<?php
//http://localhost/Project1/PHP-Learning-Hub/basics/controlFlows.php
$age = 14;



// If statement
if($age>=21){
    echo 'You are old enough';

}


// If-Else

if($age>=21){
    echo 'old enough';
} else {
    echo 'not old enough';
}

// Nested if statemetn

if ($age>=21){
    echo 'old enough to drink';
} else {
    if ($age>= 18){
        echo 'old enought to vote but not drink';
    } else {
        echo 'cant vote or drink';
    }
}

// If-Else-If


if ($age >=21){
    echo 'old enough to vote and drink';
} else if ($age>=18){
    echo 'old enought to vote but not drink';

} else {
    echo 'cant vote or drink';
}




?>
