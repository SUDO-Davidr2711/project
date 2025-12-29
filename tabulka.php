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
    <button name="page" value="home" class="form-button">home</button>
    <br>


    <label for="dat">filtr jmeno</label>
    <input type="text" id="jmfiltr" name="jmfiltr" placeholder="" class="form-input">

    <label for="dat">filtr opravneni</label>
    <input type="text" id="opfiltr" name="opfiltr" placeholder="" class="form-input">

    <button type="submit" class="form-button">filtrovat</button>
</form>


</div>

<?php
$file = fopen("users.txt", "r+");
if($file){
$poc = fgets($file);
    echo "<table class='table'>";
    echo "<tr>
            <td>Jméno</td>
            <td>heslo</td>
            <td>oprávnění</td>
            <td>Pohlaví</td>
            <td>Email</td>
            <td>Datum narození</td>
            <td>Telefon</td>
          </tr>";
    $opfiltr = $_GET['opfiltr'] ?? "";
    $jmfiltr = $_GET['jmfiltr'] ?? "";
    for($i = 1; $i <= $poc; $i++){
    $pruchod = explode(" ",trim(fgets($file)));
    $pruchod[0] = $pruchod[0] ?? "kritická chyba";
    $pruchod[1] = $pruchod[1] ?? "kritická chyba";
    $pruchod[2] = $pruchod[2] ?? "chyba";
    $pruchod[3] = $pruchod[3] ?? "chyba";
    $pruchod[4] = $pruchod[4] ?? "chyba";
    $pruchod[5] = $pruchod[5] ?? "chyba";
    $pruchod[6] = $pruchod[6] ?? "nezadáno";
    echo "<table class='table'>";

if (($jmfiltr === "" || $jmfiltr === $pruchod[0])&&($opfiltr === "" || $opfiltr === $pruchod[2])){
    echo "<tr>
              <th>$pruchod[0]
              <th>$pruchod[1]
              <th>$pruchod[2]
              <th>$pruchod[3]
              <th>$pruchod[4]
              <th>$pruchod[5]
              <th>$pruchod[6]
          <tr>";}
}

fclose($file);
}else{
    echo "vyskytla se chyba";
}

    ?>
</body>
</html>