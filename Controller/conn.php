<?php

    $conn = new mysqli('localhost' , 'root' , '' , 'ipt');


    if($conn->connect_error){
        die("Database connection error: " . $conn->connect_error);
    }
    ?>