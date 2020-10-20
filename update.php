<?php
include('dbconnect.php');
$result = pg_query($conn,"SELECT * FROM products");
header('Location: index.php');
?>
