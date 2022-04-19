<?php
require('config.php');
if (!isset($_SESSION['user'])) {
    echo $_POST['username'] . '<br>';
    echo $_POST['password'];

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);


    $_SESSION['user'] = $username;
    echo '<pre>';
    print_r($stmt->fetchAll());
    echo '</pre>';
    echo '<br>';
    echo $_SESSION['user'];
}

header('Location: index.php');
