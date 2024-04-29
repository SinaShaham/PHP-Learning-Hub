


<?php

// php -S localhost:8000 
// http://localhost/Project1/PHP-Learning-Hub/variables/strings.php

$output = null;

$user = [
    'name' => 'John',
    'email' => 'john@gmail.com',
    'password' => '2341234',
    'hobbies' => ['Tennis', 'Video Games']
];
var_dump($user);
$output = $user['name'];
$output = $user['hobbies'][1];
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
                <?php print_r($user); ?>
            </pre>
            </p> 
        </div>
    </div>

</body>

</html>

