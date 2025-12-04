<?php
//echo "<br><a href='$_SERVER[PHP_SELF]?kustutusid=$id'>kustuta</a>";
require ('config.php');
global $yhendus;

// Päring mis kustutatud tabelis andmed
if(isSet($_REQUEST["kustutusid"])){
    $kask = $yhendus->prepare("DELETE FROM lehed WHERE id=?");
    $kask->bind_param("i", $_REQUEST["kustutusid"]);
    $kask->execute();
}
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Teated lehel</title>
</head>
<body>
<h1>Teadete loetelu</h1>
<?php
$kask = $yhendus->prepare("SELECT id, pealkiri, sisu FROM lehed");
$kask->bind_result($id, $pealkiri, $sisu);
$kask->execute();

while($kask->fetch()){
    echo "<h2>".htmlspecialchars($pealkiri)."</h2>";
    echo "<div>".htmlspecialchars($sisu)."</div>";
    echo "<br><a href='$_SERVER[PHP_SELF]?kustutusid=$id'>kustuta</a>";
}
?>
</body>
</html>
<?php
$yhendus->close();
?>

