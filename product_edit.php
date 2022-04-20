<?php
require('config.php');

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM products WHERE id = :id");

$stmt->bindParam(':id', $id);

$stmt->execute();

$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

$product = $stmt->fetchAll();

$name = $product[0]['name'];
$quantity = $product[0]['quantity'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php include('nav.php') ?>
    <form action="product_edit_post.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <label for="name">Nama Produk</label>
        <input type="text" name="name" value="<?= $name ?>">
        <label for="quantity">Kuantitas</label>
        <input type="number" name="quantity" id="quantity" value="<?= $quantity ?>">
        <input type="submit" value="Submit">
    </form>
</body>

</html>