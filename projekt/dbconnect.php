<?php  

  @mysql_connect("localhost", "root", "student") OR 
  die("andmebaasi server kättesaamatu");

  @mysql_select_db("PHPsteptravel") OR
  die("andmebaas kättesaamatu");

?>
