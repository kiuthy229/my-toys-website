<?php
include('productCRUD.php');
if (count($_POST)>0){
    $obj =new ProductCRUD();
    $success = $obj ->updateProduct($_POST['code'],$_POST['name'],$_POST['details'], $_POST['price'],$_POST['image']);
    header ('Location:admin.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>ThewayShop - Ecommerce Bootstrap 4 HTML Template</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/custom.css">
    </head>
    <body>
<div class="container">
    <h2>Update an item</h2>
    <form action=<?php echo $_SERVER['PHP_SELF'] ?> method="POST">
        <div class="form-group">
        <label for="code">Product code</label>
        <input type="text" class="form-control" id="code" placeholder="Enter code" name="code">
        </div>
        <div class="form-group">
        <label for="pwd">Product name</label>
        <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
        </div>
        <div class="form-group">
        <label for="pwd">Product price</label>
        <input type="text" class="form-control" id="price" placeholder="Enter price" name="price">
        </div>
        <div class="form-group">
        <label for="pwd">Image</label>
        <input type="text" class="form-control" id="image" placeholder="Enter image" name="image">
        </div>
        <div class="form-group">
        <label for="pwd">Details</label>
        <input type="text" class="form-control" id="details" placeholder="Enter details" name="details">
        </div>
        <div class="form-group form-check">
        <label class="form-check-label">
        </label>
        </div>
        <button type="submit" class="btn btn-primary" name="add">ADD NEW</button>
    </form>
    </div>
</body>
</html>