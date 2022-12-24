<?php
    define('DB_HOST','localhost');
    define('DB_USER','ravija');
    define('DB_PASS','2000');
    define('DB_NAME','spectrum');

    // create connection
    $conn = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

    // check connection
    if($conn->connect_error){
        die('Connection Failed '.$conn->connect_error);
    }
 ?>