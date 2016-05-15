<?php
/* ***********
 Ülesanne 0203
 ************* */
/*
Lisa käsitsi massiivi kümne näitleja nime kasutades massiivi loomiseks array funktsiooni
$stars = array('Clint', 'Bruce');
Väljasta see "for" tsükliga.
*/


echo "<h1>Ülesanne 0203</h1>";

$stars = array('Sean Connery','David Niven','George Lazenby','Roger Moore','Timothy Dalton','Pierce Brosnan','Daniel Craig', 'Bernard Lee', 'Robert Brown', 'Judi Dench', 'Ralph Fiennes');



#for tükliga väljastus
//foreach ($animals as $key => $val)
for ($i=0; $i<sizeof($stars); $i++)
{
  echo $i+1 . ". " . $stars[$i] . "<br />";
}


?>
