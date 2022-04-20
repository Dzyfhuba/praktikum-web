<?php
require('config.php');

$stmt = $conn->prepare("DELETE FROM products WHERE id = :id");

$stmt->bindParam(':id', $_GET['id']);

$stmt->execute();

header('Location: product.php');
