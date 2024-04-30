<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .add{
            color: blue;
            font-size: 30px;
            text-decoration: none;
            border-radius: 2px;  
        }
  </style>
</head>
<body>
<center><a class="add"><i>EDIT PRODUCT</i></a></center>
<?php
        include("connection.php");
        $id = $_GET["pid"];
      $sql = "select * from product where pid = $id";
        $result = mysqli_query($conn,$sql);
        
        while($row = mysqli_fetch_array($result))
        {
            $p_name = $row["p_name"];
            $p_price = $row["p_price"];
            $p_category=$row["p_category"];
        }
        if(@$_POST['s_id']!='')
        {
            $p_name = $_POST['p_name'];
            $p_price = $_POST['p_price'];
            $p_category = $_POST['p_category'];

            $sql = "update product set p_name = '$p_name', p_price = '$p_price', p_category = '$p_category' where pid = $id ";
            $result=mysqli_query($conn,$sql);
            if ($result == TRUE) {
                echo "record has been updated successfully";
                header("Location:product_read.php");
            } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            }

        }
        
        
    ?>
    <div class="container-fluid">
        <div class="row">
            <center>
                
            <div class="col-md-12 c1">
                
                <form action="" method="post">
                    <div>
                        <label for=""> PRODUCT NAME : </label> 
                        <input style="margin-left:9px;" class="mt-5" type="text" name="p_name" value="<?php echo $p_name ?>">
                    </div>
                    <div>
                        <label> PRODUCT PRICE : </label>
                        <input class="mt-2" style="margin-left:17px;" type="text" name="p_price" value="<?php echo $p_price ?>" >
                    </div>
                    <div>
                    <label for="">PRODUCT CATEGORY : </label>
                    <input class="mt-2" type="text" name="p_category" value="<?php echo $p_category ?>">
                    </div>
                    <div><input type="hidden" name="s_id" value="<?php echo $pid ?>"></div>
                    <div>
                        <input class="mt-3 s1" type="submit" value="submit">
                    </div>
                </form>
            </div>
        </center>
    </div>
    </div>
</body>
</html>