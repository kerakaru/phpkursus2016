<?php
/* ***********
 Ülesanne 0205
 Kerakaru - PHP kursus 2016
 ************* */
/*
Sisesta käsitsi 3x3 kahemõõtmeline massiiv. Massiivi elementideks sisesta filmide nimed.
Nt.
$movies[1][1] = 'Matrix';
$movies[1][2] = 'Titanic';
jne.
Väljasta see massiiv tsüklitega.
*/


echo "<h1>Ülesanne 0205</h1>";

$movies[1][1] = 'Spotlight';
$movies[1][2] = 'Birdman';
$movies[1][3] = '12 Years a Slave';
$movies[2][1] = 'Argo';
$movies[2][2] = 'The Artist';
$movies[2][3] = 'The King\'s Speech';
$movies[3][1] = 'The Hurt Locker';
$movies[3][2] = 'Slumdog Millionaire';
$movies[3][3] = 'No Country for Old Man';


for ($i=1; $i<=3; $i++)
{
  for ($j=1; $j<=3; $j++)
  {
    echo $movies[$i][$j] . "<br />";
  }
}

?>
