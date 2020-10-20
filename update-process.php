<?php
include('dbconnect.php');
if(count($_POST)>0) {
pg_query($conn,"UPDATE products set code='" . $_POST['code'] . "', name='" . $_POST['name'] . "', price='" . $_POST['price'] . "', details='" . $_POST['details'] . "' WHERE userid='" . $_POST['userid'] . "'");
$message = "Record Modified Successfully";
}
$result = pg_query($conn,"SELECT * FROM products WHERE code='" . $_GET['code'] . "'");
$row= pg_fetch_array($result);
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
<a href="retrieve.php">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="userid" class="txtField" value="<?php echo $row['userid']; ?>">
<input type="text" name="userid"  value="<?php echo $row['code']; ?>">
<br>
First Name: <br>
<input type="text" name="first_name" class="txtField" value="<?php echo $row['name']; ?>">
<br>
Last Name :<br>
<input type="text" name="last_name" class="txtField" value="<?php echo $row['price']; ?>">
<br>
City:<br>
<input type="text" name="city_name" class="txtField" value="<?php echo $row['image']; ?>">
<br>
Email:<br>
<input type="text" name="email" class="txtField" value="<?php echo $row['details']; ?>">
<br>
<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>