<?php

    //DB Credentials
    $db_serverName = 'localhost';
    $db_username = 'root';
    $db_password = ''; 
    $db_name = 'authenticationdemo';

    //DB Connection
    $conn = new mysqli($db_serverName, $db_username, $db_password, $db_name);

    //Check DB Connection
    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    } else {
        echo "Connected Succesfully";
    }

    /*******End DB Connection*******/

    

?>