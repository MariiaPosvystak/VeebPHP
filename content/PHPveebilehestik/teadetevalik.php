<?php
/* В каждом заголовке есть сылка на информацию к нему
<ul>
<?php
$kask = $yhendus->prepare("SELECT id, pealkiri FROM lehed");
$kask->bind_result($id, $pealkiri);
$kask->execute();

while($kask->fetch()){
    echo "<li><a href='teadetevalik.php?id=$id'>".
         htmlspecialchars($pealkiri)."</a></li>";
}
?>
</ul>
*/

require('config.php');
global $yhendus;
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Teated lehel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="menyykiht">
    <h2>Teated</h2>
    <ul>
        <?php
        $kask = $yhendus->prepare("SELECT id, pealkiri FROM lehed");
        $kask->bind_result($id, $pealkiri);
        $kask->execute();

        while($kask->fetch()){
            echo "<li><a href='teadetevalik.php?id=$id'>".
                htmlspecialchars($pealkiri)."</a></li>";
        }
        ?>
    </ul>
</div>

<div id="sisukiht">
    <?php
    if(isSet($_REQUEST["id"])){
        $kask = $yhendus->prepare("SELECT id, pealkiri, sisu FROM lehed WHERE id=?");
        $kask->bind_param("i", $_REQUEST["id"]);
        $kask->bind_result($id, $pealkiri, $sisu);
        $kask->execute();

        if($kask->fetch()){
            echo "<h2>".htmlspecialchars($pealkiri)."</h2>";
            echo htmlspecialchars($sisu);
        } else {
            echo "Vigased andmed.";
        }
    } else {
        echo "Tere tulemast avalehele! Vali menüüst sobiv teema.";
    }
    ?>
</div>

<div id="jalusekiht">
    Lehe tegi õpilane ...
</div>

</body>
</html>
<?php
$yhendus->close();
?>