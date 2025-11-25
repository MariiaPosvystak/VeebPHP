<?php
echo "<h2>Matemaatilised tehted</h2>";
$arv1 = 4.32;
$arv2 = 7.24;

echo "Esimene arv on $arv1, teine arv on $arv2 <br>";
echo "+ Liitmise tulemus: ".($arv1 + $arv2)."<br>";
echo "- Lahutamise tulemus: ".($arv1 - $arv2)."<br>";
echo "* Korrutise tulemus: ".($arv1 * $arv2)."<br>";
echo "/ Jagatise tulemus: ".($arv1 / $arv2)."<>";
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
echo"Vahendamine ühe võrra: ";
$x *= $y; // $x = $x * $y
echo $x;
echo "<br>";
echo"Vahendamine ühe võrra: ";
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
