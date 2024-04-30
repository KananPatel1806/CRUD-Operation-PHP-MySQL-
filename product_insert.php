<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .header{
        color:black;
        font-size:30px;
       margin-top:100px;
    }
  </style>
</head>
<body>
    <div class="header"><center><i>INSERT PRODUCT</i></center></div>
    
    <div class="container">
        
        <div class="row">
            
        <form class="form-horizontal" method="post" action="insert1.php">
            <div class="form-group">
                <label  style="margin-top:50px;" class="control-label col-sm-2" >PRODUCT NAME : </label>
                <div class="col-sm-10">
                    <input style="margin-top:50px;" type="text" class="form-control"  placeholder="Product Name" name="p_name">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2" >PRODUCT PRICE : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control"  placeholder="Product Price" name="p_price">
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-sm-2">PRODUCT CATEGORY : </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Product Category" name="p_category">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default">Submit</button>
                </div>
            </div>
        </form>  
        </div>
    </div>
</body>
</html>