<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<div class="top-bar">

    <form method="get" action="skript.php?page=user">
        <input type="hidden" name="page" value="<?= $_GET['page'] ?? 'home' ?>">
        <?php
        echo '<button name="page" value="home" class="form-button">home</button>';
        $_SESSION['loguser'] = $_SESSION['loguser'] ?? null;
        $_SESSION['prava'] =  $_SESSION['prava'] ?? null;
        if($_SESSION['loguser'] === null && $_SESSION['prava'] === null) {
            echo'<button name="loginpage" value="login" class="form-button">prihlášení</button>';
            echo'<button name="loginpage" value="register" class="form-button">registrace</button>';
        }
        if($_SESSION['loguser'] !== null && $_SESSION['prava'] !== null) {
            echo'<button name="loginpage" value="loginout" class="form-button">odhlášení</button>';
        }
        ?>
    </form>

</div>
</body>
</html>