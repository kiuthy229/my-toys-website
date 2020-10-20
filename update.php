<?php
include('productCRUD.php');

$obj = new productCRUD();
$success = $obj->updateProduct($_GET['code']);
header('Location: index.php');
?>