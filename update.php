<?php
include('dbconnect.php');
$result = pg_query($conn,"SELECT * FROM products");

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete product data</title>
</head>
<body>
<table>
<tr>
<td>Id</td>
<td>Name</td>
<td>price</td>
<td>details</td>
</tr>
<?php
$i=0;
while($row = pg_fetch_array($result)) {
if($i%2==0)
$classname="even";
else
$classname="odd";
?>
<tr class="<?php if(isset($classname)) echo $classname;?>">
<td><?php echo $row["code"]; ?></td>
<td><?php echo $row["name"]; ?></td>
<td><?php echo $row["price"]; ?></td>
<td><?php echo $row["details"]; ?></td>
<td><a href="update-process.php?userid=<?php echo $row["code"]; ?>">Update</a></td>
</tr>
<?php
$i++;
}
?>
</table>
</body>
</html>