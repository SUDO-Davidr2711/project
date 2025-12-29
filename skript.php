<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php
session_start();

$u = $_SESSION["loguser"] ?? "neprihlaseno";


echo '<div class="top-bar">';
    echo "uzivatel-$u";
echo  '</div>';

$page = $_GET['page'] ?? null;

switch ($page) {
    case 'user':
        include 'user.php';
        break;
    case 'tabulka':
        include 'tabulka.php';
        break;
    default:
        include 'home.php';
        break;
}
//pouzit explode na soubor
?>




</body>
</html>
