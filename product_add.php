<?php
require('config.php');
echo $_POST['name'];
echo $_POST['quantity'];

if (isset($_POST['name'])) {
    $stmt = $conn->prepare("INSERT INTO products (name, quantity) VALUES (:name, :quantity)");

    $stmt->bindParam(':name', $_POST['name']);
    $stmt->bindParam(':quantity', $_POST['quantity']);

    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

    $_SESSION['products'] = $stmt->fetchAll();
}
header('Location: product.php');
