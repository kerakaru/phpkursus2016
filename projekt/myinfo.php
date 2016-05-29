<?php

session_start();

include "dbconnect.php";
include "functions.php";
include "header.php";

check_rights(USER);

?>



<!-- !PAGE CONTENT! -->
<div class="w3-main" style=""><!-- margin-left:300px;margin-top:43px; -->

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h3>
		<img src="http://www.w3schools.com/w3css/img_avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:40px">
<?php
  if (isset($_SESSION['login_user']['id_users']))
  {
    echo "Tere " . $_SESSION['login_user']['name'] . "!";
  }
?>
	</h3>
    <p style="margin-left:56px; margin-top:-10px;">
<?php
  if (isset($_SESSION['login_user']['id_users']))
  {
    echo "(" . $_SESSION['login_user']['username'] . ", viimane login:
    " . $_SESSION['login_user']['last_login_date'] . "). Täna on: $today";
  }
?>
    </p>
  </header>
</div>




  <div class="w3-container w3-dark-grey w3-padding-hor-32">
<div class="w3-row">


	<div class="w3-col w3-third">

<h5 class="w3-bottombar w3-border-green">Minu andmed</h5>


<?php

   $query = "SELECT * FROM users WHERE id_users='{$_SESSION['login_user']['id_users']}' LIMIT 1";

  $result = mysql_query($query) OR die("Ebaõnnestus: " . mysql_error());


//$query = "SELECT * FROM users WHERE deleted!='1' ORDER BY id_users ASC";


echo "<table border=1>";

$counter = 0;
while($row = mysql_fetch_assoc($result))
{
  $counter++;

  echo "<tr><th>jrkn</th><td>".$counter."</td></tr>";
  echo "<tr><th>ID</th><td>".$row['id_users']."</td></tr>";
  echo "<tr><th>kasutajanimi</th><td>".$row['username']."&nbsp;</td></tr>";
  echo "<tr><th>nimi</th><td>".$row['name']."&nbsp;</td></tr>";
  echo "<tr><th>e-post</th><td>".$row['email']."&nbsp;</td></tr>";
  echo "<tr><th>keel</th><td>".$row['language']."&nbsp;</td></tr>";
  echo "<tr><th>kommnetaarid</th><td>".$row['comment']."&nbsp;</td></tr>";
  echo "<tr><th>uudiskiri</th><td>".$row['newsletter']."&nbsp;</td></tr>";
  echo "<tr><th>aktiivne</th><td>".$row['status']."&nbsp;</td></tr>";
  echo "<tr><th>Liitunud</th><td>".$row['date_insert']."</td></tr>";
  echo "<tr><th>Andmeid uuendatud</th><td>".$row['date_change']."</td></tr>";
  echo "<tr><th>viimane login</th><td>".$row['last_login_date']."</td></tr>";
  echo "<tr><th>samme kokku</th><td>".$row['steps_count']."</td></tr>";

}

echo "</table>";

/* ================== */


//http://stackoverflow.com/questions/14805851/mysql-sum-column-values-based-on-row-from-the-same-table
$query2 = "SELECT SUM(fDaysSteps) AS Total FROM tblSteps WHERE user_id = " . $_SESSION['login_user']['id_users'];

$result2 = mysql_query($query2) OR die("Ebaõnnestus2: " . mysql_error());

/*
"SELECT
    SUM(IF(user_id = " . {$_SESSION['login_user']['id_users']} . ", fDaysSteps, 0)) AS 'CurrentUser',
    SUM(fDaysSteps) AS Total
FROM
    tblSteps
WHERE
    user_id = " . {$_SESSION['login_user']['id_users']} . "
GROUP BY
    user_id
*/

$counter = 0;
while($row = mysql_fetch_assoc($result2))
{
  $counter++;

  echo "kokku samme: " . $row['Total'] . "<br />" ;

}

?>


	</div>

	<!-- <div class="w3-col w3-twothird"> -->

<form action="<?php  echo $_SERVER['SCRIPT_NAME']; ?>" >
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Kalender</h5>
        <!-- <p><input type="text" name="alternate" id="alternate" /></p> -->
      <p>Date: <input type="text" id="datepicker" value="<?php if(isset($_GET["hidedDate"])) { echo $_GET['hidedDate']; } ?>" /></p>
      <input type="hidden" name="hidedDate" id="hidedDate" value="<?php if(isset($_GET["hidedDate"])) { echo $_GET['hidedDate']; } ?>" />
      <!-- <div id="datepicker"></div> -->

      </div>

      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-yellow">Sammud</h5>
        <p><input type="text" id="inSteps" name="inSteps" value="<?php if(isset($_GET["inSteps"])) { echo $_GET['inSteps']; } ?>" /></p>
      </div>
      <input type="submit" name="nupp" value="Sisesta" />
</form>


	</div>

</div>
</div>

<?php


#let's make strings secure
foreach($_POST as $key => $val)
{
  $_POST[$key] = str_secure($_POST[$key]);
}

//if($_POST['nupp'] == "Sisesta")
if($_GET['nupp'] == "Sisesta")
{

  #DB query
  $query = "INSERT INTO tblSteps SET
  fDate ='".$_GET['hidedDate']."',
  fDaysSteps ='".$_GET['inSteps']."',
  fAddedTime = NOW(),
  fUpdateTime = NOW(),
  user_id=".$_SESSION['login_user']['id_users']."
  ";

  //echo $query;

  mysql_query($query) OR
  die("Ebaõnnestus: " . mysql_error());

}






/*  EDIT block
if( (isset($_POST['nupp'])) && ($_POST['nupp'] == "Sisesta") )
{
  $_GET['id_edit'] = str_secure($_GET['id_edit']);

  #let's make strings secure
  foreach($_POST as $key => $val)
  {
    $_POST[$key] = str_secure($_POST[$key]);
  }

  #DB query
  $query = "UPDATE users SET
  username='".$_POST['username']."',
  name='".$_POST['name']."',
  email='".$_POST['email']."',
  language='".$_POST['language']."',
  comment='".$_POST['comment']."',
  newsletter='".$_POST['newsletter']."',
  status='".$_POST['status']."',
  date_change=NOW(),
  id_users_change='".$_SESSION['login_user']['id_users']."'
  WHERE id_users='".$_GET['id_edit']."'
  ";

  echo $query;

  mysql_query($query) OR
  die("Ebaõnnestus EDIT: " . mysql_error());

  echo '<META HTTP-EQUIV="Refresh" CONTENT="0; URL=search.php">';
}


  $query = "SELECT * FROM users WHERE id_users='${_GET['id_edit']}' LIMIT 1";

  $result = mysql_query($query) OR
  die("Ebaõnnestus: " . mysql_error());

  $row = mysql_fetch_assoc($result);
*/
?>





<?php
include "footer.php";

?>
