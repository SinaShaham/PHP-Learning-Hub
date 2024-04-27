<?php
// php -S localhost:8000 
// http://localhost/Project1/PHP-Learning-Hub/variables/strings.php

/*
'Y'  The year
'm'  the month
'd'  the day 
'D' The day of the week short name 
'l' The full day of the week name
'h' The hour 
'm' The minute
's' The second
'a' AM/PM
*/


$output = date('M');

// Get year with time stamp The following time stamp corresponds to 1999
$output = date('Y', 936345600);

// How to remember and resolve? Get timestamp from strtotime
$output = date('Y', strtotime('1999-09-01'));

// Get month
$output = date('m');

// Get day
$output = date('D');

$output = date('Y-m-d');

// Get min
$output = date('s');

// Get AM/PM
$output = date('a');

// Put it together
$output  = date('Y-m-d h:i:s a')

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


