<?php
echo "<h2>Töö pildifailidega</h2>";
?>
<form method="post" action="">
  <select name="image">
    <option value="">Vali pilt</option>
    <?php
		$kataloog = 'image';
		$asukoht=opendir($kataloog);
		while($rida = readdir($asukoht)){
			if($rida!='.' && $rida!='..'){
				echo "<option value='$rida'>$rida</option>n";
			}
		}
	?>
  </select>
  <input type="submit" value="Vaata">
</form>
<?php
if(!empty($_POST['image'])){
    $image = $_POST['image'];
    $pildi_aadress = 'image/'.$image;
    $pildi_andmed = getimagesize($pildi_aadress);

    $laius = $pildi_andmed[0];
    $korgus = $pildi_andmed[1];
    $formaat = $pildi_andmed[2];
    $max_laius = 120;
    $max_korgus = 90;

    if($laius <= $max_korgus && $korgus<=$max_korgus){
        $ratio = 1;
    } elseif($laius>$korgus){
        $ratio = $max_laius/$laius;
    } else {
        $ratio = $max_korgus/$korgus;
    }

    $pisi_laius = round($laius*$ratio);
    $pisi_korgus = round($korgus*$ratio);

    echo '<h3>Originaal pildi andmed</h3>';
    echo "Laius: $laius<br>";
    echo "Kõrgus: $korgus<br>";
    echo "Formaat: $formaat<br>";

    echo '<h3>Uue pildi andmed</h3>';
    echo "Arvutamse suhe: $ratio <br>";
    echo "Laius: $pisi_laius<br>";
    echo "Kõrgus: $pisi_korgus<br>";
    echo "<img width='$pisi_laius' src='$pildi_aadress'><br>";
}
echo "<h2>Kataloog piltidega (valib juhusliku pildi)</h2>";
$kataloog = 'image';
$failid = [];

if ($asukoht = opendir($kataloog)) {
    while (($rida = readdir($asukoht)) !== false) {
        if ($rida != '.' && $rida != '..') {
            $failid[] = $rida;
        }
    }
    closedir($asukoht);
}

if (!empty($failid)) {
    $random_index = array_rand($failid);
    $random_image = $failid[$random_index];
    echo "<h3>Juhuslik pilt</h3>";
    echo "<img src='$kataloog/$random_image' alt='pilt'>";
}
?>