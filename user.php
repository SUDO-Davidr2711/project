<?php

$page = $_GET['loginpage'] ?? 'null';
switch ($page) {
    case 'login':
        include 'login.php';
        break;
    case 'register':
        include 'register.php';
        break;
    case 'loginout':
        include 'logout.php';

        break;
    default:
        include 'loginhome.php';
        break;
}



?>

