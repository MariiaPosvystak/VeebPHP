<?php
require("config.php");
//kustutamie
global $connect;
if(isset($_REQUEST['kustuta'])){
    $paring=$connect->prepare("Delete from uudised where uudisId=?");
    $paring->bind_param('i',$_REQUEST['kustuta']);
    //i - integer, s - string, d - double
    $paring->execute();
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
<table>
    <tr>
        <th>JRK</th>
        <th>Pealkiri</th>
        <th>Kuupäev</th>
        <th>Kirjeldus</th>
        <th>Tuju</th>
    </tr>
<?php
global $connect;
$paring=$connect->prepare("Select uudisId, pealkiri, kuupaev, kirjeldus, tuju from uudised");
$paring->bind_result($id, $pealkiri, $kuupaev, $kirjeldus, $tuju);
$paring->execute();

while($paring->fetch()){
    echo "<tr>";
    echo "<td>".$id."</td>";
    echo "<td bgcolor='$tuju'>".$pealkiri."</td>";
    echo "<td>".$kuupaev."</td>";
    echo "<td>".$kirjeldus."</td>";
    echo "<td>".$tuju."</td>";
    echo "<td><a href='?kustuta=$id'>Kustuta</a></td>";
    echo "</tr>";
}
?>
</table>
<a href="lisaUudis.php">Lisa uudis</a>
</body>
</html>
