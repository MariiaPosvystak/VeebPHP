<!DOCTYPE html>
<html lang="et">
<head>
    <meta charset="UTF-8">
    <title>Mariia Posvystak PHP tööd</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/muusikaKysitlus.css">
    <script src="JS/muusikaKysitlus.js"></script>
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
        <img src="image/madu.jpg" alt="madu">
    </div>
</div>

<?php
//jalus
include("footer.php");
?>
</body>
</html>