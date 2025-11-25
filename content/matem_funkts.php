<?php
function clearVarsExcept($url, $num){
    $url = basename($url);
    if (ctype_digit($url[0])) {
        return "?$num=" . ($_REQUEST[$num]);
    }
    return strtok($url, '?') . "?$num=" . ($_REQUEST[$num]);
}
echo "<h2>Matemaatilised tehted</h2>";
$arv1 = 4.32;
$arv2 = 7.24;

echo "Esimene arv on $arv1, teine arv on $arv2 <br>";
echo "+ Liitmise tulemus: ".($arv1 + $arv2)."<br>";
echo "- Lahutamise tulemus: ".($arv1 - $arv2)."<br>";
echo "* Korrutise tulemus: ".($arv1 * $arv2)."<br>";
echo "/ Jagatise tulemus: ".($arv1 / $arv2)."<br>";
echo "<h3>Matemaatilised funktsioonid</h3>";
echo "<br>Väiksem arv: ";
echo min($arv1, $arv2);
echo "<br>Suurem arv: ";
echo max($arv1, $arv2);
echo "<br>round(arv) - Ümardamine täisarvani: ";
echo round($arv1);
echo "<br>ceil(arv) - Ümardab jargmise arvuni: ";
echo ceil($arv1);
echo "<br>floor(arv) - Ümardab allapoole täisarvani: ";
echo floor($arv1);
echo "<br>round(arv, 1) - Ümardab ühe komma kohtani: ";
echo round($arv1, 1);
echo "<br>rand(min, max) - juhuslik arv: ";
echo rand(1, 100);
echo "<br>pow(arv, 2) - Astemdamine: ";
echo pow($arv1, 2);
echo "<br>sqrt(arv) - Ruutjuur: ";
echo sqrt($arv1);
echo "<br>pi() - Pi arv: ";
echo pi();

echo "<h2>Omistamise operaatorid</h2><br>";
$x = 10;
$y = 20;
echo"Suurendamine ühe võrra: ";
$x ++; // $x = $x + 1
echo $x;
echo "<br>";
echo"Vahendamine ühe võrra: ";
$x --; // $x = $x - 1
echo $x;
echo "<br>";
$x *= $y; // $x = $x * $y
echo $x;
echo "<br>";
$x /= $y; // $x = $x / $y
echo $x;
echo "<br>";
$nimi = 'Mariia';
$perenimi = 'Posvystak';
//$nimi .= $perenimi;
echo $nimi;
echo "<br>";
$format = 'Tere, %s %s, arv x: %d';
printf($format, $perenimi, $nimi, $x);
echo "<br><br>";
echo "<h2>Arv mõistatus, arva  ära 2 arvu(1-50)</h2><br>";
$num1 = 9;
$num2 = 33;
echo "<ol><li>"." Nende numbrite summa on ".($num1 + $num2).".";
$rnum1 = sqrt($num1);
$rnum1 ++;
$rnum1 ++;
echo "<li>"." Ühe arvu juurele lähedane arv on $rnum1.";
$num2 ++;
echo "<li>"." Ühe numbri ligikaudne arv on $num2.";
$num2 --;
echo "<li>"." Juhuslik number, mis asub nende vahel on ".rand($num1, $num2).".";
$jarg = $num2 / $num1;
echo "<li>"." Nende arvude jagamisel on tulemus ligikaudu ".round($jarg);
echo "<br><br>";
?>
    <form name="numkontroll" action="<?=clearVarsExcept($_SERVER['REQUEST_URI'], "link")?>" method="post">
        <label for="num1">Sisesta esimene number: </label>
        <input type="number" id="num1" name="num1" min="1" max="50">
        <label for="num2">Sisesta teine number: </label>
        <input type="number" id="num2" name="num2" min="1" max="50"><br>
        <input type="submit" value="Kontrolli">
        <br><br>
    </form>
<?php
if (isset($_REQUEST['num1'])) {
    $num1 = (int)$_REQUEST['num1'];

    if ($num1 === 9) {
        echo "Esimene number: ".$num1. " on õige!";
    } else {
        echo "Esimene number: ".$num1 . " on vale!";
    }
    echo "<br>";
}
if (isset($_REQUEST['num2'])) {
    $num2 = (int)$_REQUEST['num2'];

    if ($num2 === 33) {
        echo "Teine number: ".$num2 . " on õige!";
    } else {
        echo "Teine number: ".$num2 . " on vale!";
    }
}
?>