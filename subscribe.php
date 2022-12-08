<?php
        $firstname = $_POST["firstname"];
        $email = $_POST["email"];
        

        //Database Connection

        $conn = new mysqli("localhost", "root", "", "subscribe");
        if($conn->connect_error){
            die('connection Failed : ' .$conn->connect_error);
        }
        else{
            $stmt = $conn->prepare("insert into registration (firstname, email) 
            values(?, ?)");
            $stmt->bind_param("ss", $firstname, $email);
            $stmt->execute();
            echo "Thanks for subscribing ";
            $stmt->close();
            $conn-> close();
        }
    ?>


        
    