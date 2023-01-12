<?php

    session_start();

    require 'dbconnect.php';
    
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username != "" && $password != '') {
        $sql = "SELECT id, username, password FROM users WHERE username = '{$username}';";
        $result = $conn->query($sql);
        if($result->num_rows > 0) {
            $user = $result->fetch_assoc();

            //COMPARE 2 HASHES PASSWORD
            if(password_verify($password, $user['password'])) {

                //LOGIN USER HERE
                $_SESSION['id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                header("Location: ../home.php");
            } else {
                $_SESSION['error'] = 'User and Password do not match';
                header("Location: ../index.php");
            }
        } else {
            $_SESSION['error'] = 'User not found';
            header("Location: ../index.php");
        }
    } else {
        $_SESSION['error'] = 'Fields cannot be empty';
        header("Location: ../index.php");
    }

        
?>