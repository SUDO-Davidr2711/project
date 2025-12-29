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
        <label for="zp">odhlašení proběhlo uspěsně</label>
        <button id="zp" name="loginpage" value="home" class="form-button">zpět</button>
    </form>
</div>






<?php
$_SESSION['loguser'] =  null;
$_SESSION['prava'] = null;
?>
</body>
</html>