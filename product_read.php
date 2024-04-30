<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        table {
        border-collapse: collapse;
        width: 100%;
        }
        th, td {
        padding: 8px;
        text-align: left;
        border-bottom: 1px solid #ddd;
        }
        .space{
           font-weight:300;
            font-size: 20px;
           
        }
        .add{
            color: blue;
            font-size: 22px;
            text-decoration: none;
            border-radius: 2px;  
        }
        tr:hover {background-color: #ffcbb6;}
    
  </style>
</head>
<body>
<?php
    include("connection.php");
    $sql = "select * from product";
    $result=mysqli_query($conn,$sql);

?>
<div class="container mt-4">
<center><a class="add" href="product_insert.php"><i>ADD NEW PRODUCT</i></a></center>
<table class="table mt-4">
            <tr class="space">
                <th>PRODUCT ID</th>
                <th>PRODUCT NAME</th>
                <th>PRODUCT PRICE</th>
                <th>PRODUCT CATEGORY</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            <?php   
            
                 while($row = mysqli_fetch_array($result))
                 {
            ?>
            <tr>
                <td><?php echo $row["pid"];?></td>
                <td><?php echo $row["p_name"];?></td>
                <td><?php echo $row["p_price"];?></td>
                <td><?php echo $row["p_category"];?></td>
                <td ><?php echo "<a href=product_edit.php?pid=$row[pid] style=text-decoration:none>Edit</a>"?></td>
                <td><?php echo "<a href=product_delete.php?pid=$row[pid] style=text-decoration:none>Delete</a>"?></td>
                
            </tr>
            <?php
                 }
            ?>
        </table>
    </div>

</body>
 </html>