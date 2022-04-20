<?php
require('config.php');

$stmt = $conn->prepare("SELECT * FROM products");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$products = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('nav.php') ?>
    <form action="product_add.php" method="post">
        <label for="name">Nama Produk</label>
        <input type="text" name="name">
        <label for="quantity">Kuantitas</label>
        <input type="number" name="quantity" id="quantity">
        <input type="submit" value="Submit">
    </form>
    <table border="1px">
        <thead>
            <th>Product</th>
            <th>Quantity</th>
            <th>Edit</th>
            <th>Delete</th>
        </thead>
        <tbody>
            <?php foreach ($products as $product) { ?>
                <tr>
                    <td><?php echo $product['name'] ?></td>
                    <td><?php echo $product['quantity'] ?></td>
                    <td><a href="product_edit.php?id=<?php echo $product['id'] ?>">Edit</a></td>
                    <td><a href="product_delete.php?id=<?php echo $product['id'] ?>">Delete</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>

</html>