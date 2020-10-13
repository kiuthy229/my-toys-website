<?php
include('productCRUD.php');

$obj = new productCRUD();
$success = $obj->deleteProduct($_GET['code']);
header('Location: index.php');
?>