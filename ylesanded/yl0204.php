<?php
/* ***********
 Ülesanne 0204
 ************* */
/*
Lisa massiivi inimese isikuandmed (nimi, vanus jne.) min 5 elementi.
Väljasta need mõnes lauses, sellesama inimese kohta.
Nt. "Kodanik [nimi] on [vanus] aastane"
*/


echo "<h1>Ülesanne 0204</h1>";

$actor = array('Sean Connery','25.08.1930','Edinburgh, Šotimaa, Suurbritannia','šoti','filminäitleja');
$today = new DateTime();

echo $actor[0] . ", sündinud " . $actor[1] . " (" . $actor[2] . ")" . " on " . $today->diff(new DateTime($actor[1]))->y . " aastane " . $actor[3] . " " . $actor[4] . ".<br />";

//http://stackoverflow.com/questions/3380990/php-calculate-persons-current-age
//$diff = $today->diff(new DateTime($actor[1]))->y;
//echo $diff->y;

//http://stackoverflow.com/questions/6238992/converting-string-to-date-and-datetime
//echo DateTime::createFromFormat('d.m.Y', $actor[1])->format('Y-m-d');

?>
