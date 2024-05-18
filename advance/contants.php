<?php

// http://localhost/Project1/PHP-Learning-Hub/advance/contants.php

define('APP_NAME', 'My App'. '<br>');
define('APP_VERSION', '1.0.0'. '<br>');



echo APP_NAME;
echo APP_VERSION;

// Constants are global so can be used in functions. 
const DB_NAME = 'mydb';
const DB_HOST = 'localhost';

echo DB_NAME, DB_HOST;
?>