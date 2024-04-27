
<?php
$names = ['Sina', 'Mina', 'Ali'];
$numbers = [1,2,3,4,5];
//echo $names[1];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

unset($numbers[2]);
inspect($names);
inspect($numbers);

// For reindexing use the following:
$numbers = array_values($numbers);
inspect($numbers);

?>