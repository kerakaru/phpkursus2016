<?php 

$newLine = "<br>\n";

$drinks[]="piim";
$drinks[]="Juhan Jalutaja";
$drinks[]="Jaak Daaniel";
$drinks[]="Jim Kiir";
$drinks[]="Kuulus Teder";
$drinks[]="keefir";

echo $newLine . $drinks[3];

var_dump($drinks);

$rand = rand(0, sizeof($drinks)-1);



echo $newLine . $drinks[$rand];

?>