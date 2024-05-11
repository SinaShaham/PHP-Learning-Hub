

<?php
// http://localhost/Project1/PHP-Learning-Hub/advance/functions.php
function addVal($a, $b){
    return $a+$b;
}
function sayHello(){
    echo "hello world!". "<br>";
}
function sayGoodbye(){
    return "Goodbye"."<br>";
}

// Use the follow to add as many arguments as you want:)
function addAll(...$numbers){
    $total = 0;
    foreach($number as $number){
        $total += $number;
    }
    return $total;
}

sayHello();
$x = sayGoodbye();
echo $x;

$x = 10;
$y = 20;
echo addVal(1,1,1,3,4);

?>



