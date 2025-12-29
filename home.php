<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="top-bar">
        <form method="get" action="skript.php">
            <button name="page" value="user" class="form-button">Login</button>
            <?php
            if($_SESSION['prava'] === 'all') {
                echo'<button name="page" value="tabulka" class="form-button">tabulka</button>';
            }




            ?>

        </form>
    </div>

</body>
</html>