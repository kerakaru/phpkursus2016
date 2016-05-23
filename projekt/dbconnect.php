<?php

  //@mysql_connect("localhost", "root", "student") OR
  @mysql_connect("localhost", "dbPHPuser", "dbPHPuser") OR 
  die("andmebaasi server kättesaamatu");

  @mysql_select_db("PHPsteptravel") OR
  die("andmebaas kättesaamatu");

?>
