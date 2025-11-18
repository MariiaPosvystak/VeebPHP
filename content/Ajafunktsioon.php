<div id="aeg1">
<?php
echo "<h2>Ajafunktsioonid</h2>";
//timezone, juhul kui timezone ei ole määratud, siis php näitab local
date_default_timezone_set('Europe/Tallinn');
echo "<a href='https://www.php.net/manual/en/timezones.europe.php'>Timezones</a><br>";
echo "time() -aeg sekundides - ".time();
echo "<br>";
echo "date() - ".date("d.m.Y G:i:s", time());
echo "<br>";
echo "date('d.m.Y H:i:s', time())";
echo "<br>";
?>
</div>
<div id="aeg2">
<?php
echo "<pre> 
d - päev 01...31
m - kuu 01...12
Y - aasta - nelja kohane arv
G - 24h formaat
i - minutid 0...59
s - sekundid 0...59";
echo "</pre>";
?>
</div>
<div id="aeg3">
<?php
echo "<strong>Tehted kuupäevaga</strong>";
echo "<br>";
echo "+1 min=time()+60 ".date("d.m.Y G:i:s", time()+60);
echo "<br>";
echo "+1 tund=time()+60*60 ".date("d.m.Y G:i:s", time()+60*60);
echo "<br>";
echo "+1 päev=time()+60*60*24 ".date("d.m.Y G:i:s", time()+60*60*24);
echo "<br>";
?>
</div>
<div id="aeg4">
<?php
echo "<strong> Kuupäeva genireerimine</strong>";
echo "<br>";
echo "mktime(tunnid, minutid, sekundid, kuu, päev, aasta";
$synd=mktime(5,37,28,10,12,2008);
echo "<br><strong>Minu sünipäev:</strong> ".date("d.m.Y G:i:s", $synd);
echo "<br>";
?>
</div>
<div id="aeg5">
<?php
echo "Massiivi abil näidata kuu nimega";
echo "<br>";
$kuud=array(1=>'jaanuar', 'veebruar', 'märts', 'aprill', 'mai', 'juuni', 'juuli', 'august', 'september', 'oktoober', 'november', 'detsember');
$aasta=date("Y");
$paev=date("d");
$kuu=$kuud[date("m")];
echo $paev.". ".$kuu." ".$aasta." a.";
?>
</div>