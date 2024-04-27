
<?php

$output = null;

$ids = [10,20,14, 45, 68];
$users = ['user4', 'user2', 'user3'];

// count
$output = count($ids);

// sort
sort($ids);
sort($users);


// array_push
array_push($ids, -209);

// array_pop
array_pop($users);


// Summing numbers
$output = 'Sum of IDs: ' . array_sum($ids);

$tags = 'tech, code, programming';
$tagsArr = explode(',',$tags);
var_dump($tagsArr);

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
            <h2 class = "text-xl font-semibold my-4">Output:</h2>
            <p class="text-xl"><?= $output ?></p>
            <h2 class = "text-xl font-semibold my-4">IDs Array:</h2>
            <p>
            <pre>
                <?php print_r($ids); ?>
            </pre>
            </p> 
            <h2 class = "text-xl font-semibold my-4">Users Array:</h2>
            <p>
            <pre>
                <?php print_r($users); ?>
            </pre>
            </p> 
        </div>
    </div>

</body>

</html>

