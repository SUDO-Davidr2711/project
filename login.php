<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>


    <div class="top-bar">
        <form method="post" action="">
            <input name="heslo" class="form-input">
            <input name="uzjmeno" class="form-input">
            <button class="form-button">prihlášení</button>
        </form>
    </div>
    <div class="top-bar">
        <form method="get" action="skript.php?page=user">
            <input type="hidden" name="page" value="<?= $_GET['page'] ?? 'home' ?>">
            <button name="loginpage" value="home" class="form-button">zpět</button>
        </form>
    </div>


<?php
$zadano[0] = $_POST['heslo'] ?? null;
$zadano[1] = $_POST['uzjmeno'] ?? null;

$file = fopen("users.txt", "r+");
if($file){
    $poc = fgets($file);
    for($i = 1; $i <= $poc; $i++){
        $pruchod = explode(" ",trim(fgets($file)));
        if($pruchod[0] === $zadano[0] && $pruchod[1] === $zadano[1]){
            $loguser = $pruchod[0];
            $prava = $pruchod[2];


            echo '<div class="top-bar">';
            echo "prihlášeni proběhlo uspěsně = $loguser";
            echo  '</div>';
        }
    }
    fclose($file);
}else{
    echo "vyskytla se chyba";
}


$_SESSION['loguser'] = $loguser ?? null;
$_SESSION['prava'] = $prava ?? null;

?>
</body>
</html>