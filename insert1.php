<?php
    include("connection.php");
    $p_name = $_POST["p_name"];
    $p_price = $_POST["p_price"];
    $p_category = $_POST["p_category"];
    

    $sql = "INSERT INTO product(p_name,p_price,p_category)
        VALUES('$p_name','$p_price','$p_category')";

    $result = mysqli_query($conn,$sql);
    if($result)
    {
        echo "insert record successfully";
        header("Location:product_read.php");
    }
    else{
        echo "error";
    }