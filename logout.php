<?php
session_start();
echo $_SESSION['user'] . '<br>';
session_unset();
echo $_SESSION['user'];
header('Location: index.php');
