<?php
    include("connection.php");
    $sql = "CREATE TABLE product(
        pid INT AUTO_INCREMENT PRIMARY KEY,
        p_name VARCHAR(255) NOT NULL,
        p_price VARCHAR(255) NOT NULL,
        p_category VARCHAR(255) NOT NULL) ";
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "Table created successfully";
    }
    else{
        echo "Error";
    }
    
