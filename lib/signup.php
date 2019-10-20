<?php
    // Include DB connection
    require_once 'db.php';


    if(isset($_POST["signup"])) {

        $username = $_POST["username"];   
        $email = $_POST["email"];
        $pass = $_POST["pass"];
        $con_pass = $_POST["con_pass"];

       if($pass !== $con_pass){
                echo "<div class='alert alert-danger' role='alert'>Password Do Not Match </div>";
                } else {
                $sql = "INSERT INTO login (`username` , `email` , `password` ) VALUES ('$username', '$email' , '$pass')";
                if($con->query($sql) === TRUE){
               echo header('Location: dashboard.php');
             }else{
                  echo "Error: " . $sql . "<br>" .$con->error;
             }
              $con->close();
        }
    }
    


