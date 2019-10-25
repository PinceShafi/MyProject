<?php
session_start();

// Include db connection

include_once "db.php";

if(isset($_POST["submit"])){

    $email = $_POST["email"];
    $password = $_POST["pass"];

    $sql = $con->query("SELECT * FROM login WHERE `email` = '$email' AND `password` = '$password'");
    if($sql->num_rows === 1){
        $_SESSION["email"] = $email;
        $_SESSION["pass"]  = $password;
        header('location: ../index.php');
    }else{
        echo "Login Credentials are incorrect";
    }
    $con->close();
}
  


 ?>