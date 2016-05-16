<?php
/* ***********
 Ülesanne 0304
 Kerakaru - PHP kursus 2016
 ************* */
/*
Kasutades arikmeetilist tehet moodul teha funktsioon nimega "number_info", mille sisendargumendiks on täisarv ja mis:

1. Teatab kasutajale kas tegu on paaris või paaritu arvuga.
	Mooduli näide:
	12%2=0
	13%2=1
	14%2=0
2. Teatab kasutajale kas arv on suurem või väiksem kui 10.
3. Teatab kasutajale kas arv on suurem või väiksem kui 100.
4. Näitab kasutajale arvu ruudus.
5. Näitab kasutajale arvust ruutjuurt.

Käivita funktsioon 5 korda sisestades arvudeks: 1, 8, 9, 15, 200
*/


echo "<h1>Ülesanne 0304</h1>";


function is_even_odd($inNumber)
{
  if ($inNumber % 2 == 0)
  {
    return "paaris";
  } else {
    return "paaritu";
  }
}

function is_bigger_than($inNumber, $in_test)
{
  if ($inNumber > $in_test)
  {
    return "suurem";
  } else {
    return "väiksem";
  }
}

function number_info($inNumber)
{

  echo $inNumber . " on " . is_even_odd($inNumber) . " number, 10-st " . is_bigger_than($inNumber, 10) . " ja 100-st " . is_bigger_than($inNumber, 100) . ", tõstetuna ruutu: " . $inNumber ** 2 . " ja ruutjuur on " . sqrt($inNumber);
}





echo number_info(1) . "<br />";
echo number_info(8) . "<br />";
echo number_info(9) . "<br />";
echo number_info(15) . "<br />";
echo number_info(200) . "<br />";


?>
