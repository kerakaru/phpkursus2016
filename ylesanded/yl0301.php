<?php
/* ***********
 Ülesanne 0301
 Kerakaru - PHP kursus 2016
 ************* */
/*
Luua massiivi nimega "$mas" elementidega Karu, Jänes, Hunt, Rebane, Hirv, Hiir, Põder, Ahv, Mäger, Mutt.
Karu massiivi elemendi indeks olgu 0, Jänesel 1 jne.

Teha funktsioon nimega "kuva_massiiv". Funktsiooni sisendargumendiks olgu massiiv mida 
soovime välja kuvada. Funktsiooni sees lugeda funktsiooniga "sizeof" elemendid kokku 
ja väljastada tsükliga kõik masiivi elemendid üksteise alla. Kuvatud elemendi ette 
panna ka massiivi elemendi number. Kuvamisel panna kõige lõppu panna paragrafi tag "<p>".

Näide:
0. Karu
1. Jänes
2. Hunt
jne.

Lisainfoks , et peale 0301-0303 ülesannet peab tulema umbes säärane programm:

funktsioon kuva_massiiv
funktsioon vaheta_elemendid
funktsioon kustuta_element

tee massiiv
kuva_massiiv
vaheta_elemendid
kuva_massiiv
kustuta_element
kuva_massiiv
*/


echo "<h1>Ülesanne 0301</h1>";

$mas = array('Karu', 'Jänes', 'Hunt', 'Rebane', 'Hirv', 'Hiir', 'Põder', 'Ahv', 'Mäger', 'Mutt');




function kuva_massiiv($inArray)
{
    $tmp_output = "";
    $tmp_output .= "<p>";
    for ($i=0; $i<sizeof($inArray); $i++)
    {
         $tmp_output .= $i . ". " . $inArray[$i] . "<br />";
    }
    $tmp_output .= "</p>";
    return $tmp_output;
}

function vaheta_elemendid()
{
    
}

function kustuta_element()
{
    
}


echo kuva_massiiv($mas);


?>
