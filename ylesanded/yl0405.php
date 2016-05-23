<?php
/* ***********
 Ülesanne 0405
 Kerakaru - PHP kursus 2016
 ************* */
/*
Genereeri kahe FOR tsükkliga 10x10 korrutustabel.
Korrutustabel peab olema HTML tabeli sees.
Korrutustabelis peab olema esimesel real ja veerul numbrid 1-10.
Teisel real esimese rea ja veeru korrustis jne.

Näidet otsi PHP süntaksi materjalist: http://students.tmk.edu.ee/php/materjal/php_syntax.php
*/


//echo "<h1>Ülesanne 0404</h1>";


?>
<!DOCTYPE html>
<html>
<head>
  <title>Ülesanne 0405</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <style>
    th, td { text-align:center;}
  </style>
</head>
<body>

  <h1>Ülesanne 0405</h1>


  <table border="1">
<?php

  echo "<tr>";
for ($i = 0; $i <= 10; $i++)
{


  if ($i == 0)
  {
    echo "<th>&nbsp;</th>";
  } else {
    echo "<th>$i</th>";
  }


}
    echo "</tr>";

for ($i = 1; $i <= 10; $i++)
{
    echo "<tr>";

    for ($j = 0; $j <= 10; $j++)
    {
      if ($j == 0)
      {
        echo "<th>" . $i . "</th>";
      } else {
        echo "<td>" . $i*$j . "</td>";
      }

    }

    echo "</tr>";
}


?>

</table>



</body>
</html>
