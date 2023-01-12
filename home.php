<?php

    session_start();

    //redirect user if not login
    if(!isset($_SESSION['id'])) {
        header("Location: index.php");
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
    <style>
        table tr td {
            vertical-align: middle;
        }
    </style>
</head>
<body>
    <div class="container p-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
            <h1>Welcome <strong><?php echo $_SESSION['username']?></strong></h1>
            <a href="config/logout.php">
                <button class="btn btn-md btn-primary">
                    Logout
                </button>
            </a>
        </div>
        <div class="row position-relative">
            <h1 class="text-center"><strong>TASKS</strong></h1>
            <a href="backend/newtasks.php" class="mt-5">
                <button class="btn btn-md btn-primary px-4 float-end w-25">ADD NEW TASK</button>
            </a>
        </div>
    </div>
</body>
</html>