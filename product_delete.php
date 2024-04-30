<?php
    include("connection.php");
    $id = $_GET["pid"];
    $sql="delete from product where pid = $id";
    $result=mysqli_query($conn,$sql);
    header("location:product_read.php");

?>