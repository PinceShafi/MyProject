<?php

    session_start();

    if(!isset($_SESSION['email']) && !isset($_SESSION['pass'])) {

        header('location: login.php');

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"> 
    <title>Sidebar</title>
    
</head>
<body>
    <?php include_once "navbar.php"?>
    <div class="container-fluid">
        <div class="row">
            <?php include_once "sidebar.php"   ?>

            <div class="col-sm-10">
                
            </div>
        </div>
    </div>
</body>
</html>