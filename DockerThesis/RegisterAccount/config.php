<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
#define('DB_SERVER', 'localhost:3306');
define('DB_SERVER', '192.168.0.126:3306');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'mysql');
define('DB_NAME', 'accounts');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
