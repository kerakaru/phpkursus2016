<?php
/* ***********
 Ülesanne 0404
 Kerakaru - PHP kursus 2016
 ************* */
/*
Tee vorm <form> tagiga kangelase andmete sisestamiseks. Pange kogu vorm ka tabelisse. Paigutage lahtrite
kirjelduse esimesse veergu ja lahtrid teise veergu. Nagu on näidatud siin.
http://students.tmk.edu.ee/php/materjal/php_database.php#Sisestusvorm
Nimi (<input type=text>)
Klass (<select>, <options>)
Rass (<select>, <options>)
Sugu (<input type=radio>)
Lemmikloom kaasas (<input type=checkbox>)
Kirjeldus (<textarea></textarea>)
Submit nupp <input type=submit>
Vorm kinni.
*/


//echo "<h1>Ülesanne 0404</h1>";


?>
<!DOCTYPE html>
<html>
<head>
  <title>Ülesanne 0404</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />

</head>
<body>

  <h1>Ülesanne 0404</h1>

  <form>


    <table border="1">

    <tr>
      <td>Nimi:</td>
      <td><input type="text" name="name" value="<?php if(isset($_GET["name"])) { echo $_GET['name']; } ?>"></td>
    </tr>
    <tr>
      <td>Klass:</td>
      <td>
      <select name="class">
        <option></option>
        <option>Raamtupidamine</option>
        <option>Ehitus</option>
        <option>Meditsiin</option>
        <option>Infotehnoloogia</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Rass:</td>
      <td>
      <select name="race">
        <option></option>
        <option <?php if(isset($_GET["race"]) && ($_GET["race"] == "Euroopa")) { echo "checked"; } ?>>Euroopa</option>
        <option <?php if(isset($_GET["race"]) && ($_GET["race"] == "Aasia")) { echo "checked"; } ?>>Aasia</option>
        <option <?php if(isset($_GET["race"]) && ($_GET["race"] == "Aafrika")) { echo "checked"; } ?>>Aafrika</option>
      </select>
      </td>
    </tr>
    <tr>
      <td>Sugu:</td>
      <td>
        Naine: <input type="radio" name="sex" value="female" <?php if(isset($_GET["sex"]) && ($_GET["sex"] == "female")) { echo "checked"; } ?>>
        Mees: <input type="radio" name="sex" value="male" <?php if(isset($_GET["sex"]) && ($_GET["sex"] == "male")) { echo "checked"; } ?>>
      </td>
    </tr>
    <tr>
      <td>Lemmikloom kaasas:</td>
      <td><input type="checkbox" name="petalong" value="yes" <?php if(isset($_GET["petalong"]) && ($_GET["petalong"] == "yes")) { echo "checked"; } ?>></td>
    </tr>
    <tr>
      <td>Kirjeldus:</td>
      <td><textarea name="description" cols="25" rows="7"><?php if(isset($_GET["description"])) { echo $_GET['description']; } ?></textarea></td>
    </tr>
  </table>
  <input type="submit" name="nupp" value="Sisesta">
  <input type="reset" value="Algseis tagasi">



  </form>
</body>
</html>
