<?php
/* ***********
 Ülesanne 0403
 Kerakaru - PHP kursus 2016
 ************* */
/*
Lisa massiivi 15 HTML erinevat värvi.
Leia ilusaid värvi nimed siit: http://www.w3schools.com/colors/colors_names.asp
Kuva tsükliga välja värvuste nimed ja värvi need sama värvi nt.
<span style='color: cyan'>cyan - sinine taevas</span>
*/


//echo "<h1>Ülesanne 0403</h1>";


$arrColours = array('Bisque', 'Aquamarine', 'CadetBlue', 'Coral', 'Cornsilk', 'DarkOliveGreen', 'DarkRed', 'DarkSalmon', 'DeepSkyBlue', 'GoldenRod', 'HotPink', 'SeaGreen', 'SlateGrey', 'SteelBlue', 'Tomato');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Ülesanne 0403</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

  <style>
    div { height:2em; line-height:2em; padding:0.5em; font-family:sans-serif;}
  </style>
</head>
<body>

  <h1>Ülesanne 0403</h1>





<?php
  for ($i=0; $i<sizeof($arrColours); $i++)
  {
    echo '<div style="background-color:' . $arrColours[$i] . ';" >' . ($i+1) . '. ' . $arrColours[$i] .'</div>';
  }
?>





</body>
</html>
