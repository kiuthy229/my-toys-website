<?php
include('productCRUD.php');
$obj = new ProductCRUD();
$list = $obj->readProducts();
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
    </head>
    <body>
        <a href="insert.php"> <h2>Add a new item</h2> </a>
        <div class="container">
        <h2> </h2>
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
                    <td> <a href="update-process.php?userid=<?php echo $row["code"]; ?>"><button type="button" class="btn btn-danger">Update</button></a>
                    <a href="delete.php?code=<?=$item["code"]?>" onClick="return confirm ('ARE YOU SURE?');"><button type="button" class="btn btn-danger">Delete</button></a> </td>
                </tr>
                <?php } ?>
                <?php } ?>
            </table>
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
        </div>
    </body>
</html>
