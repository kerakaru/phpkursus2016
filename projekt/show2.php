<?php

session_start();

include "dbconnect.php";
include "functions.php";
include "header.php";

check_rights(ANONYMOUS);

?>


<h3>Sammude vaatamine</h3>


<?php

$query = "SELECT * FROM tblSteps WHERE user_id=" . $_SESSION['login_user']['id_users'] . " ORDER BY fDate ASC";

$result = mysql_query($query) OR
die("Ebaõnnestus: " . mysql_error());

?>
<table class="w3-table-all w3-hoverable">
  <thead>
  <tr class="w3-green">
    <th>jrkn</th>
    <th>ID</th>
    <th>user_id</th>
    <th>kuupäev</th>
    <th>päeva sammud</th>
    <th>kirje lisatud</th>
    <th>kirje muudetud</th>
  </tr>
</thead>
<?php
$counter = 0;
while($row = mysql_fetch_assoc($result))
{
  $counter++;

  echo "<tr>";
  echo "<td>".$counter."</td>";
  echo "<td>".$row['id_tblSteps']."</td>";
  echo "<td>".$row['user_id']."&nbsp;</td>";

  echo "<td>".$row['fDate']."&nbsp;</td>";
  echo "<td>".$row['fDaysSteps']."&nbsp;</td>";
  echo "<td>".$row['fAddedTime']."&nbsp;</td>";
  echo "<td>".$row['fUpdateTime']."&nbsp;</td>";
  echo "</tr>";

}

echo "</table>";

include "footer.php";

?>
