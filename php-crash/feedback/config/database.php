<?php
    define('DB_HOST', 'localhost');
    define('DB_USER', 'marc');
    define('DB_PASS', '12marc34');
    define('DB_NAME', 'feedback');

    // Create connection
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    // Check connection
    if($conn->connect_error) {
        die('Connection Failed ' . $conn->connect_error);
    }
?>
