<?php
require('config.php');

if ($_POST['id']) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $quantity = $_POST['quantity'];

    // update
    $stmt = $conn->prepare("UPDATE products SET name = :name, quantity = :quantity WHERE id = :id");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':quantity', $quantity);

    $stmt->execute();
}

header('Location: product.php');
