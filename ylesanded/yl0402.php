<?php
/* ***********
 Ülesanne 0402
 Kerakaru - PHP kursus 2016
 ************* */
/*
Tee tsükliga 20 "checkboxi2. Pane neile kõigile oma nimi stiilis box[1], box[2], jne.
Tee tsükliga 20 "teksti lahtrit". Pane neile kõigile oma nimi stiilis cell[1], cell[2], jne.
Tee tsükliga 20 "radio buttonit". Pane neile kõigile üks nimi "radio" ja erinevad väärtused stiilis value1, value2 jne.
*/


//echo "<h1>Ülesanne 0402</h1>";



?>
<!DOCTYPE html>
<html>
<head>
  <title>Ülesanne 0402</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>

  <h1>Ülesanne 0402</h1>

  <p>
    <a href="#sectionCheckbox">Checkbox-id</a> -
    <a href="#sectionTextbox">Textbox-id</a> -
    <a href="#sectionRadio">Radio button-id</a>
  </p>

  <div id="sectionCheckbox">
    <h2>Checkbox-id</h2>

    <p>
<?php
  for ($i=1; $i<=20; $i++)
  {
    echo '<input type="checkbox" name="box[' . $i . ']" value="' . $i . '" />' . $i .'<br />';
  }
?>
    </p>
  </div>


  <div id="sectionTextbox">
    <h2>Textbox-id</h2>

    <p>
<?php
  for ($i=1; $i<=20; $i++)
  {
    echo '<input type="text" name="cell[' . $i . ']" value="' . $i . '" /><br />';
  }
?>
    </p>
  </div>


  <div id="sectionRadio">
    <h2>Radio button-id</h2>

    <p>
<?php
  for ($i=1; $i<=20; $i++)
  {
    echo '<input type="radio" name="radio" value="value' . $i . '" />' . $i .'<br />';
  }
?>
    </p>
  </div>

</body>
</html>
