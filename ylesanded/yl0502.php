<?php
/* ***********
 Ülesanne 0502
 Kerakaru - PHP kursus 2016
 ************* */
/*
Teha funktsioon nimega "est_day". Selle sisendiks olgu date funktsiooniga saadud nädalapäev. Väljundiks aga eesti keelne nädalapäev.
* Leida kuidas date funktsioon leiab nädalapäeva (http://ee.php.net/manual/en/function.date.php)
* Sisestada see funktsiooni
* Luua massiiv nt. ja leida päeva vastavus massiivi elemendile
$mas[1]="Esmaspäev";
$mas[2]="Teisipäev";
* Tagastada peaprogrammile (return) ja seal väljastada eesti keelne nädalapäeva nimetus
*/


echo "<h1>Ülesanne 0502</h1>";

$mas = array('', 'esmaspäev', 'teisipäev', 'kolmapäev', 'nejapäev', 'reede', 'laupäev', 'pühapäev');



function est_day($inIDate)
{
  global $mas;

//    $tmpYear = "19" . $inIdNumber[1] . $inIdNumber[2];  //TODO add century logic 2, 3 vs
    return $mas[$inIDate];

}





echo "Täna on " . est_day(date("w")) . ".";




?>
