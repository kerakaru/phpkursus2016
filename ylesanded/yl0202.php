<?php
/* ***********
 Ülesanne 0202
 Kerakaru - PHP kursus 2016
 ************* */
/*
Lisa käsitsi massiivi 10 looma nime kasutades massiivi kohanäitu. Nt. $animals[0]="karu" jne.
Väljasta see "foreach" tsükkliga.
*/

echo "<h1>Ülesanne 0202</h1>";

$animals[0]="karu";
$animals[1]="rebane";
$animals[2]="hunt";
$animals[3]="siil";
$animals[4]="hirv";
$animals[5]="jänes";
$animals[6]="korall kaamel";
$animals[7]="põder";
$animals[8]="kährik";
$animals[9]="konn";


#foreach tükliga väljastus
foreach ($animals as $key => $val)
{
  echo "Massiivi võti on $key ja elemendi väärtus on $val<br />";


}


?>
