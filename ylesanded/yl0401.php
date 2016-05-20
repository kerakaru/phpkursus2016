<?php
/* ***********
 Ülesanne 0401
 Kerakaru - PHP kursus 2016
 ************* */
/*
Tee massiiv kuhu lisada järgmised andmed:
Nimi, aadress, pildi nimi (nt. vello.jpg), kodulehekülg (nt. www.onu.ee)
Pilt salvesta ülesande kataloogi.
Luua HTML lehekülg kuhu kuvda massiivist välja eelpool kirjeldatud andmed.
Nime kuvamiseks kasuta <b> tagi.
Aadressi kuvamiseks kasuta <i> tagi.
Pildi kuvamiseks kasuta <img src=> tagi.
Kodulehe lingi kuvamiseks kasuta <a href=> tagi.
*/


//echo "<h1>Ülesanne 0401</h1>";


$arrContact = array('Ants Ploom', 'Uulitsa 24, 91827 Goorod, Eesti', 'img/w3schools-img_avatar1.png', 'http://google.ee');

?>
<!DOCTYPE html>
<html>
<head>
  <title>Ülesanne 0401</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>

  <h1>Ülesanne 0401</h1>

  <p>
    <b><?= $arrContact[0] ?></b><br />
    <i><?= $arrContact[1] ?></i><br />
    <img src="<?= $arrContact[2] ?>" /><br />
    <a href="<?= $arrContact[3] ?>"><?= $arrContact[3] ?></a><br />
  </p>
</body>
</html>
