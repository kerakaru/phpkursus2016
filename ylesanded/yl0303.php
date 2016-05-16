<?php
/* ***********
 Ülesanne 0303
 Kerakaru - PHP kursus 2016
 ************* */
/*
Jätkata eelmist ülesannet. 

Teha funktsioon nimega "kustuta_element". Funktsiooni sisendargumendiks olgu massiivi 
elemendi nr. mille väärtust soovime kustutada ja massiiv ise. Kustutatud elemendist 
järgmised liikugu ühe koha võrra ettepoole. Kustuta massiivi viimane tühi element 
funktsiooniga unset($mas[key]). Tagasta massiiv põhiprogrammile. Kustuta funktsiooniga 
element nr. 1 "Jänes". Kuvada "kuva_massiiv" funktsiooniga massiiv välja.

Näide:
Oli 0. Karu, 1. Jänes, 2. Hunt jne.
Peale kustutamist olgu 0. Karu, 1. Hunt jne.
*/


echo "<h1>Ülesanne 0303</h1>";

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

function kustuta_element($inElemId, $inArray)
{
    for ($i=$inElemId; $i<sizeof($inArray)-1; $i++)
    {
         $inArray[$i] =  $inArray[$i+1];
    }
    unset($inArray[sizeof($inArray)-1]);    //remove last element (of original array)
    return $inArray;

}


//experimental, to avoid to use for looping not working
function kustuta_element2($inElemId, $inArray)
{
    
    print_r( array_splice($inArray,$inElemId+1,sizeof($inArray)-$inElemId) );
$tmpArray =  array_splice($inArray,$inElemId+1,sizeof($inArray)-$inElemId);
echo "in function";
print_r($tmpArray);
    array_splice($inArray, $inElemId, 1, $tmpArray);
return $inArray;
}


echo "<p>Alustus massiiv:</p>";
echo kuva_massiiv($mas);

echo "<p>Elementide vahetamine massiivis:</p>";
$mas = vaheta_elemendid(3, 7, $mas);
echo kuva_massiiv($mas);

echo "<p>Elemendi kustutamine massiivist:</p>";
$mas = kustuta_element(1, $mas);
echo kuva_massiiv($mas);


?>
