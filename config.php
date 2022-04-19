<?php
if (session_id() == '' || !isset($_SESSION)) {
    // session isn't started
    session_start();
}

$servername = "localhost";
$username = "ubaid";
$password = "plmoknijb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=prak_pweb", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
