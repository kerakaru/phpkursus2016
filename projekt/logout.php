<?php  

session_start();

include "dbconnect.php";
include "functions.php";
include "header.php";

?>


<h3>Kasutaja välja logimine</h3>

<?php  

echo $_SESSION['login_user']['name'] . " on süsteemist välja logitud.";

session_destroy();

?>
