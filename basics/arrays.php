
<?php
$names = ['Sina', 'Mina', 'Ali'];
$numbers = [1,2,3,4,5];
//echo $names[1];

function inspect($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}


inspect($names);
inspect($numbers);

?>