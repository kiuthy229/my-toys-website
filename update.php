<?php
include('dbconnect.php');
$obj =new ProductCRUD();
$success = $obj ->createProduct($_POST['code'],$_POST['name'],$_POST['price'],$_POST['image'],
$_POST['details']);
header ('Location:index.php');
?>
