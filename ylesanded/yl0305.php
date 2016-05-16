<?php
/* ***********
 Ülesanne 0305
 Kerakaru - PHP kursus 2016
 ************* */
/*
Teha funktsioon nimega "string_info". Funktsiooni sisendargumendiks olgu teksti string ($string). Funktsioon üleb:

1. Mis on selle stringi esimene täht ja viimane täht. Funktsioon "strlen" leiab stringi pikkuse ja "echo $string[0]" kuvab esimese tähe.
2. Mitu tähte stringis on (strlen).
3. Kogu string tehaks läbiva väiketähega (strtolower) ja väljastatakse.
4. Kogu string tehaks läbiva suurtähega (strtoupper) ja väljastatakse.
5. Tsükliga loetakse kokku ja kuvatakse ekraanile mitu "a" tähte stringis esineb.
*/


echo "<h1>Ülesanne 0305</h1>";


function character_count($inString, $inCharacter)
{
  $tmpCount = 0;
  for ($i = 0; $i<strlen($inString); $i++)
  {
    if ( strtolower($inString[$i]) == strtolower($inCharacter) )
    {
      $tmpCount ++;
    }
  }
  return $tmpCount;
}

function string_info($inString)
{

  echo "'" . $inString . "' algab " . strtoupper($inString[0]) . "-tähega ja lõpeb " . strtoupper($inString[strlen($inString)-1]) . "-tähega. Kokku on " . strlen($inString) . " tähte. Väikeste tähtedega '" . strtolower($inString) . "' ja suurelt kirjutades: '" . strtoupper($inString) . "'. A-tähti on kokku: " . character_count($inString, "a") . ".";
}





echo string_info("kolmteist") . "<br />";
echo string_info("saippukauppamies") . "<br />";
echo string_info("Ameerikamaa") . "<br />";



?>
