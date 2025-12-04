<?php
// $kask = $yhendus->prepare("SELECT id, pealkiri, sisu FROM lehed"); - Näites tabelist
// $kask->bind_result($id, $pealkiri, $sisu); - millistesse PHP muutujatesse kantakse andmebaasist tulevad väärtused
// $kask->execute(); - start command

/* while($kask->fetch()){
    echo "<h2>" . htmlspecialchars($pealkiri) . "</h2>";
    echo "<div>" . htmlspecialchars($sisu) . "</div>";
} -- tsükkel mis näitab tabelis on veebi*/

// $yhendus->close(); - end command

require ('config.php');
global $yhendus;
$kask = $yhendus->prepare("SELECT id, pealkiri, sisu FROM lehed");
$kask->bind_result($id, $pealkiri, $sisu);
$kask->execute();
?>
<!DOCTYPE html>
<html lang="et">
<head>
    <title>Teated lehel</title>
</head>
<body>
<h1>Teadete loetelu</h1>
<?php
while($kask->fetch()){
    echo "<h2>".htmlspecialchars($pealkiri)."</h2>";
    echo "<div>".htmlspecialchars($sisu)."</div>";
}
?>
</body>
</html>
<?php
$yhendus->close();
?>
