<?php
// php -S localhost:8000 
// http://localhost/Project1/PHP-Learning-Hub/variables/strings.php
$output = null;
$string = 'Hello World';
//echo 'Starting Point ';

$output = $string;
$output = strlen($string);

$output = str_word_count($string);

//Get specific character
$output = $string[2];


// Get substr start at 6 then go forward 5 
$output = substr($string,6,5);

// str_replace replace substring with sth else
$output = str_replace('World', 'Universe', $string);

// Get lower case
$output = strtolower($string);


?> 


</html>



<body class = "bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class = "text-3xl font-semibold">PHP From Scratch</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <div class="bg-white rounded-lg shadow-md p-6 mt-6">
            <p class="text-xl"><?= $output ?></p>
        </div>
    </div>

</body>

</html>


