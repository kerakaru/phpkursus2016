<?php 

$newLine = "<br>\n";

$drinks[]="piim";
$drinks[]="Juhan Jalutaja";
$drinks[]="Jaak Daaniel";
$drinks[]="Jim Kiir";
$drinks[]="Kuulus Teder";
$drinks[]="keefir";

echo $newLine . "<h2>Üks väärtus</h2>";
echo $newLine . $drinks[3];

echo $newLine . $newLine ."<h2>var_dump()</h2>";
echo "<pre>";
var_dump($drinks);
echo "</pre>";



$rand = rand(0, sizeof($drinks)-1);
echo $newLine . $newLine . "<h2>random väärtus</h2>";
echo $newLine . $drinks[$rand];



echo $newLine . "<h2>Kõik joogid</h2>";
echo "<ul>";
for ($i = 0; $i < sizeof($drinks); $i++)
{
    echo "<li>" . $drinks[$i] . " (" . rand(1,10) . "€)</li>";
} 
echo "</ul>";



echo $newLine . "<h2>Kõik joogid</h2>";
foreach ($drinks as $key => $val)
{
    $counter++;
    echo "$counter) Massiivi elemendi indeks: $key väärtusega: $val<br />";
}



echo $newLine . "<h2>sorteeri joogid</h2>";
echo sort($drinks);
echo $drinks[0];



?>