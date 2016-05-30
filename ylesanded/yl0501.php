<?php
/* ***********
 Ülesanne 0501
 Kerakaru - PHP kursus 2016
 ************* */
/*
Teha funktsioon nimega get_brithday. Mille sisendiks oleks isikukood ja väljundiks sünniaeg. Isikukoodis
näitab esimene nr. sugu, 2 ja 3 sünniaastat, 4 ja 5 sünnikuud, 6 ja 7 sünnipäeva ja ülejäänud numbrid 3 on
suvalised ja lõpuks kontrollsumma.
Nt. kui $ik="37903250678"; siis aasta leiaks $y = "19".$ik[1].$ik[2];
Sinu isikukood on: 37903250678
Sinu sünnipäev on: 25.03.1979
Peale aastat 2000 on isikukoodi esimesed numbrid 5 ja 6.
*/


echo "<h1>Ülesanne 0501</h1>";

$mas = array('Karu', 'Jänes', 'Hunt', 'Rebane', 'Hirv', 'Hiir', 'Põder', 'Ahv', 'Mäger', 'Mutt');


function get_birthday($inIdNumber)
{
  if ( strlen($inIdNumber) == 11 )
  {
    $tmpYear = "19" . $inIdNumber[1] . $inIdNumber[2];  //TODO add century logic 2, 3 vs
    return "Sinu sünnipäev on: " . substr($inIdNumber, 5, 2) . "." . substr($inIdNumber, 3, 2) . "." . $tmpYear;

  } else {
    return "Isikukood peab olema 11 numbriline. Palun kontrolli üle.";
  }
}





echo get_birthday("37903250678");




?>
