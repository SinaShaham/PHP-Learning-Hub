<?php


//Basic For Loop
for($i = 0; $i<10; $i++){
    echo $i . '<br />';
}

//Basic While Loop
$i=0;

while($i <10 ){
    echo $i. '<br />';
    $i = $i+1;
}

?>


</html>
<body class = "bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <div class="bg-white rounded-lg shadow-md p-6 mt-6">
                <ul>
                <?php for($i = 0; $i<=10; $i++): ?>
                    <li>Number: <?= $i ?></li>
                <?php endfor; ?>
                </ul>
            </div>
        </div>

</body>

</html>
