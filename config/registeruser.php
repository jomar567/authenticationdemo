<?php

    session_start();

    require 'dbconnect.php';
    
    $username = trim($_POST["username"]);
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    if($username != "" && $password != '') {

        //VALIDATE PASSWORD MATCH
        if($password == $confirm_password) {

            //VALIDATE DUPLICATE USER
            $sql = "SELECT username FROM users WHERE username = '{$username}';";
            $result = $conn->query($sql);
            if($result->num_rows > 0) {
                $_SESSION['error'] = "Username {$username} already taken";
                header("Location: ../register.php");
            } else {
                //HASH THE PASSWORD
                $password = password_hash($password, PASSWORD_BCRYPT);

                //INSERT QUERY
                $sql = "INSERT INTO users (username, password) VALUES ('{$username}','{$password}');";

                if($conn->query($sql)) {
                    $_SESSION['success'] = 'Account Created';
                    header("Location: ../index.php");
                } else {
                    $_SESSION['success'] = 'Oops! Something went wrong :(';
                    header("Location: ../register.php");
                }
            }
            
        } else {
            $_SESSION['error'] = 'Password do not match';
            header("Location: ../register.php");
        }

    } else {
        $_SESSION['error'] = 'Fields cannot be empty';
        header("Location: ../register.php");
    }

        
?>