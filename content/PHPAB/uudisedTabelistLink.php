<?php
require("config.php");
global $connect;
if(isset($_REQUEST['uusuudis'])){
    if(isset($_REQUEST['nimi']) && $_REQUEST['nimi'] !==0){
        $paring=$connect->prepare("Insert into uudised (pealkiri,kuupaev,kirjeldus,tuju) values(?, ?, ?, ?)");
        $paring->bind_param("ssss",$_REQUEST['nimi'],
            $_REQUEST['kuupaev'], $_REQUEST['kirjeldus'], $_REQUEST['tuju']);
        $paring->execute();
        //header("Location:uudisedTabelist.php");
        $paring->close();
    }
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Uudised SQL andmebaasist</title>
    <link rel="stylesheet" href="ABstyle.css">
</head>
<body>
<h1>Uudiste tabeli sisu</h1>
<div id="menyy">
    <ul>
        <?php
        global $connect;
        $paring=$connect->prepare("Select uudisId, pealkiri from uudised");
        $paring->bind_result($id, $pealkiri);
        $paring->execute();

        while($paring->fetch()){
            echo "<li><a href='?id=$id'>".$pealkiri."</a></li>";
        }
        echo "<li><a href='?lisamine=jah'>Lisa uudis</a></li>";
        ?>

    </ul>
</div>
<div id="sisu">
    <?php
    global $connect;
    if(isset($_REQUEST['id'])){
        $paring=$connect->prepare("Select uudisId, pealkiri, kuupaev, kirjeldus, tuju from uudised where uudisId=?");
        $paring->bind_result($id, $pealkiri, $kuupaev, $kirjeldus, $tuju);
        $paring->bind_param("i", $_REQUEST['id']);
        $paring->execute();

        if($paring->fetch()){
            echo "<h2>".htmlspecialchars($pealkiri)."</h2>>";
            echo "<div>".$kuupaev.", ".$tuju;
            echo "<br><img width='200px' src='$kirjeldus' alt='pilt'></div>";
        }
    }
    if(isset($_REQUEST['lisamine'])){
    ?>
    <form action="">
        <input type="hidden" value="jah" name="uusuudis">
        <label for="nimi">Pealkiri</label>
        <input type="text" name="nimi" id="nimi"><br>
        <label for="kuupaev">Kuupäev</label>
        <input type="date" name="kuupaev" id="kuupaev"><br>
        <label for="kirjeldus">Kirjeldus</label><br><br>
        <textarea name="kirjeldus" id="kirjeldus"></textarea><br>
        <label for="tuju">Tuju</label>
        <input type="color" name="tuju" id="tuju"><br>
        <input  type="submit" value="Lisa">
    </form>
    <?php
    }
    ?>
</div>
<br>
<div id="link">
    <a href="uudisedTabelist.php">Näita Tabelist</a>
</div>
</body>
</html>
