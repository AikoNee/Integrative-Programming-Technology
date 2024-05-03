<?php
    
    include "conn.php";

    if(isset($_POST["username"]) && isset($_POST["password"])){
        
        $username = $_POST["username"];
        $password = $_POST["password"];



        if(empty($username)){
            header("Location: ../View/main.php?params='Please enter username and password'");
            exit();
        }   
         else if (empty($password)) {
            header("Location: ../View/main.php?params='Please enter username and password'");
            exit();
        }

        //CHECK IF NAAY EXISTING NGA USER ACCOUNT WITH SAME USERNAME

        $result_1 = $conn->query("SELECT ( ID ) FROM accounts WHERE `USERNAME` = '$username'");

        if($result_1->num_rows > 0){  
            header("Location: ../View/main.php?params='Username already in used.'");
            
            exit();
        }
        if( $conn->query("INSERT INTO accounts( `USERNAME` , `PASSWORD` ) VALUES ( '$username' , '$password' ) ") === TRUE ){

            header("Location: ../View/main.php?params='Sucessfully created account.'");
        } else {          
            echo $conn->error;
            exit();
        }

        $conn->close();
    }