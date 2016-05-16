<?php
/* ***********
 Ülesanne 0302
 Kerakaru - PHP kursus 2016
 ************* */
/*
Jätkata eelmist ülesannet. 

Tee funktsioon nimega "vaheta_elemendid". Funktsiooni sisendargumendiks olgu kaks 
massiivi elemendi numbrit, mille kohtasid massiivis soovime vahetada ja massiiv ise. 
Vahetamiseks tuleb kasutada funktsioonisisest lisamuutujat. Vahetada elementide 
"3. Rebane" ja "7. Ahv" massiivi kohad. Tagasta massiiv põhiprogrammile. Kuvada 
"kuva_massiiv" funktsiooniga massiiv välja.

Näide: 
Rebane jääb nr. 7-ks
Ahv jääb nr. 3-ks

function vaheta_elemendid($e1, $e2, $mas)  {

	$ajutine = $mas[$e1];
	$mas[$e1] = $mas[$e2];
	$mas[$e2] = $ajutine;

	return $mas;

}

$loomad = vaheta_elemendid(3, 7, $loomad);
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

function vaheta_elemendid($e1, $e2, $inArray)
{
    $ajutine = $inArray[$e1];
    $inArray[$e1] = $inArray[$e2];
    $inArray[$e2] = $ajutine;

    return $inArray;
}

function kustuta_element()
{
    
}

echo "<p>Alustus massiiv:</p>";
echo kuva_massiiv($mas);

echo "<p>Elementide vahetmaine massiivis:</p>";
$mas = vaheta_elemendid(3, 7, $mas);
echo kuva_massiiv($mas);

?>
