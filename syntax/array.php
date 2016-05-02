<?php 

$newLine = "<br>\n";

$drinks[]="piim";
$drinks[]="Juhan Jalutaja";
$drinks[]="Jaak Daaniel";
$drinks[]="Jim Kiir";
$drinks[]="Kuulus Teder";
$drinks[]="keefir";

echo $newLine . "<h2>üks väärtus</h2>";
echo $newLine . $drinks[3];

echo $newLine . $newLine ."<h2>var_dump()</h2>";
echo "<pre>";
var_dump($drinks);
echo "</pre>";



$rand = rand(0, sizeof($drinks)-1);
echo $newLine . $newLine . "<h2>random väärtus</h2>";
echo $newLine . $drinks[$rand];

?>