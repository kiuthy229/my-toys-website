<?php
include('productCRUD.php');
$obj = new ProductCRUD();
$list = $obj->readProducts();
session_start();
//tiến hành kiểm tra là người dùng đã đăng nhập hay chưa
//nếu chưa, chuyển hướng người dùng ra lại trang đăng nhập
if (!isset($_SESSION['username'])) {
     header('Location: login.php');
}
if ($list){
    /*foreach($list as $item){
        $content= "";
        foreach($item as $key =>$value) {
            $content = $content.$key.": ".$value."<br>";
        }
        echo $content."<br>";
    }
*/

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
        <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="our-link">
                        <ul>
                            <li><a href="insert.php">Insert a new item</a></li>
                            <li><a href="update.php">Update an item</a></li>
                            <li><a href="index.php">Home Page</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

        <form action="/action_page.html">

            <table class="table table-bordered">
                <tr>
                    <th> Product ID </th>
                    <th> Product Name </th>
                    <th> Product price </th>
                    <th> Product image </th>
                    <th> Product details </th>
                    <th> Actions </th>
                </tr>
                <?php foreach($list as $item){ ?>
                <tr>
                    <td> <?php echo $item["code"] ?> </td>
                    <td> <?php echo $item["name"] ?> </td>
                    <td> <?php echo $item["price"] ?> </td>
                    <td> <img src="img\<?= $item['image'] ?>" width="140" height="140"/> </td>
                    <td> <?php echo $item["details"] ?> </td>
                    <td>
                    <a href="delete.php?code=<?=$item["code"]?>" onClick="return confirm ('ARE YOU SURE?');"><button type="button" class="btn btn-danger">Delete</button></a> </td>
                </tr>
                <?php } ?>
                <?php } ?>
            </table>          
        </div>
    </body>
</html>
