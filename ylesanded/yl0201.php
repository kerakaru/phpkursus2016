<?php
/* ***********
 Ülesanne 0201
 Kerakaru - PHP kursus 2016
 ************* */
/*
Genereeri tsükliga 100 täisarvust koosnev massiiv.
Väljasta see "print_r" funktsiooniga.
*/

echo "<h1>Ülesanne 0201</h1>";

$tmp_array = array();

for($i=1; $i<=100; $i++)
{
    $tmp_array[$i] = $i;
}

print_r($tmp_array);


?>
