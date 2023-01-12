<?php

    session_start();

    if(isset($_SESSION['id'])) {
        header("Location: home.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container vh-100">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="card_wrapper w-50">
                <div class="card shadow p-3">
                    <h1 class="text-center py-3">REGISTER</h1>
                    <?php
                        if(isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger w-75 m-auto mb-2" role="alert">
                            '.$_SESSION['error'].'
                            </div>';

                            // Clear Session
                            unset($_SESSION['error']);
                        }
                    ?>
                    <div class="w-75 m-auto">
                    <form action="config/registeruser.php" method="POST">
                        <div class="mb-3">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" name="username" id="username">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="password" name="confirm_password">
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-lg px-5 my-4">Create Account</button>
                            <span>
                                <p>
                                    Already have an account?
                                <a href="index.php"><small>Login</small></a>
                                </p>
                            </span>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>