<?php
require ('config.php');
global $connect;
if(isset($_REQUEST['nimi']) && $_REQUEST['nimi'] !==0){
    $paring=$connect->prepare("Insert into uudised (pealkiri,kuupaev,kirjeldus,tuju) values(?, ?, ?, ?)");
    $paring->bind_param("ssss",$_REQUEST['nimi'],
        $_REQUEST['kuupaev'], $_REQUEST['kirjeldus'], $_REQUEST['tuju']);
    $paring->execute();
    header("Location:uudisedTabelist.php");
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Lisa uudis andmebaasi</title>
    <link rel="stylesheet" href="ABstyle.css">
</head>
<body>
<h1>Lisa uudis</h1>
<form action="">
    <label for="nimi">Pealkiri</label>
    <input type="text" name="nimi" id="nimi"><br>
    <label for="kuupaev">Kuupäev</label>
    <input type="date" name="kuupaev" id="kuupaev"><br>
    <label for="kirjeldus">Kirjeldus</label>
    <textarea name="kirjeldus" id="kirjeldus"></textarea><br>
    <label for="tuju">Tuju</label>
    <input type="color" name="tuju" id="tuju"><br>
    <input type="submit" value="Lisa">
</form>
</body>
</html>
