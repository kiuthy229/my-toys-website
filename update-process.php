<?php
include('productCRUD.php');
if(count($_POST)>0) {
$query='update "products" set name="thy" where code=6';    
pg_query($conn,$query);
$message = "Record Modified Successfully";
}
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="admin.php">Admin</a>
</div>
Product ID: <br>
<input type="hidden" class="txtField" value="<?php echo $row['code']; ?>">
<input type="text"  value="<?php echo $item['code']; ?>">
<br>
Product Name: <br>
<input type="text" class="txtField" value="<?php echo $item['name']; ?>">
<br>
Price:<br>
<input type="text" class="txtField" value="<?php echo $item['price']; ?>">
<br>
Image:<br>
<input type="text" class="txtField" value="<?php echo $item['image']; ?>">
<br>
Details:<br>
<input type="text" class="txtField" value="<?php echo $item['details']; ?>">
<br>
<input type="submit" value="Submit" class="buttom">

</form>
</body>
</html>