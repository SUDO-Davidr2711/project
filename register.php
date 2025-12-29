<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>



<div class="top-bar">
    <form method="post" action="" class="form-container">
        <label for="username">Uživatelské jméno</label>
        <input type="text" id="username" name="username" placeholder="uživatelské jméno" required class="form-input">

        <label for="password">Heslo</label>
        <input type="password" id="password" name="password" required class="form-input">

        <label for="m">Muž</label>
        <input type="radio" id="m" name="gender" value="m" required class="form-radio">

        <label for="f">Žena</label>
        <input type="radio" id="f" name="gender" value="f" required class="form-radio">

        <label for="mail">m</label>
        <input type="email" id="m" name="m" placeholder="email@emali.com " required class="form-input">

        <label for="dat">datum narozeni</label>
        <input type="date" id="dat" name="dat" placeholder="" required class="form-input">


        <label for="tel">tel</label>
        <select name="pred" id="tel" class="form-input">
            <option value="null">-</option>
            <option value="+420">+420</option>
        </select>
        <input type="number" id="tel" name="num" placeholder="000000000" class="form-input">

        <label for="potvrzení1">souhlas se spracovánim udaju</label>
        <input type="checkbox" id="potvrzení1" class="form-radio" required>
        <label for="potvrzení2">souhlas s podmínkami </label>
        <input type="checkbox" id="potvrzení2" class="form-radio" required>

        <label for="code">administratorský kod</label>
        <input type="text" id="code" name="code" placeholder="neni nutno zadávat" class="form-input">

        <button type="submit" class="form-button">Registrace</button>




    </form>

    <form method="get" action="skript.php?page=user" class="form-container">
        <input type="hidden" name="page" value="<?= $_GET['page'] ?? 'home' ?>">
        <button name="loginpage" value="home" class="form-button">Zpět</button>
    </form>
</div>

</body>
<?php
$zadano[1] = $_POST['username'] ?? null;
$zadano[0] = $_POST['password'] ?? null;
$vytvorit = 1;

$file = fopen("users.txt", "r+");
if($file){
    $poc = fgets($file);
    for($i = 1; $i <= $poc && $zadano[1] !== null; $i++){
        $pruchod = explode(" ",trim(fgets($file))) ?? null;
        if($pruchod[1] === $zadano[1]){
    echo "tento uzivatel jiz existuje";
            $vytvorit = 0;
    break;
        }

    }
    if ($vytvorit === 1 && $zadano[0] !== null && $zadano[1] !== null){
        fputs($file, "\n");
        fputs($file, $zadano[0]);
        fputs($file, ' ');
        fputs($file, $zadano[1]);
        fputs($file, ' ');
        if ($_POST['code']==='all'){
            fputs($file, 'all');
        }else{
            fputs($file, 'nan');
        }
        fputs($file, ' ');
        fputs($file, $_POST['gender']);
        fputs($file, ' ');
        fputs($file, $_POST['m']);
        fputs($file, ' ');
        fputs($file, $_POST['dat']);
        fputs($file, ' ');
        fputs($file, $_POST['pred'] ?? "");
        fputs($file, $_POST['num'] ?? "nan");




        rewind($file);
        fputs($file, ($poc+1));
        echo '<div class="top-bar">';
        echo "registrace proběhla";
        echo  '</div>';

    }
    fclose($file);
}else{
    echo '<div class="top-bar">';
    echo "vyskytla se chyba";
    echo  '</div>';

}

?>
</html>