<?php 

    // Include DB connection
    include_once 'db.php';

    if(isset($_POST["submit"])){
        $first_name = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $fname = $_POST["fname"];
        $class = $_POST["class"];
        $section = $_POST["section"];
        $roll = $_POST["roll"];

        $filename = $_FILES['image']['name'];
        $filetype = $_FILES['image']['type'];
        $filesize = $_FILES['image']['size'];
        $filetmp = $_FILES['image']['tmp_name'];
        
        // Allow certain file formats

        if($filetype == "image/jpg" || $filetype == "image/png" || $filetype == "image/jpeg" || $filetype == "image/gif"){

            // Check file size 
            if($filesize <= 5000000){

                $sql = "INSERT INTO students(`first_name` , `last_name` , `fname` , `class` , `section` , `roll` , `image`)VALUES ('$first_name' , '$last_name' ,'$fname' , '$class' , '$section' , '$roll' , '$filename')";
                // Checking 
                if($con->query($sql) === TRUE){
                    if (move_uploaded_file($filetmp, '../uploads/' . $filename)) {
                        echo header('location: ../students.php');
                    }
                }
                
            }else{
                echo "Sorry your file is so large";
            }
    
            
        } else {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        }
    }



?>