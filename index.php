<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Mariia Posvystak PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/muusikaKysitlus.css">
    <link rel="stylesheet" href="style/ValuutKalkulaator.css">
    <script src="JS/muusikaKysitlus.js"></script>
    <script src="JS/Randompilt.js"></script>
    <script src="JS/ValuutKalkulaator.js"></script>
    <script src="JS/date.js"></script>
</head>
<body>
<?php
//päis
    include("header.php");
?>
<?php
//navigeerimismenüü
include("nav.php");
?>
<div class="flex-container">
    <div>
        <?php
        if(isset($_GET['link'])){
            include('content/'.$_GET['link']);
        } else {
            include('content/avaleht.php');
        }
        ?>
    </div>
    <div>
        <img src="image/madu.jpg" alt="madu"><br>
        <input type="button" value="TÄNA ON" id="todayButton" onclick="PaevjaAeg()">
        <div id="result"></div>
        <div id="result2"></div>
        <div id="result3"></div>
        <input type="button" value="Minu sünnipäev on 12.10" id="birthdayButton" onclick="Minu_sp()">
        <div id="spresult"></div>
    </div>
</div>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<br><br><br><br><br>
<?php
//jalus
include("footer.php");
?>
</body>
</html>