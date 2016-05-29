<!DOCTYPE html>
<html>

<head>
  <title>CLONEKasutajate andmebaas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
  <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">


  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="http://code.jquery.com/jquery-1.10.2.js"></script>
  <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
    $( "#datepicker" ).datepicker({
      //altField: "#alternate",
      //altFormat: "DD, d MM, yy",
      dateFormat: "yy-mm-dd",
      onSelect: function(date) {
            $("#hidedDate").val(date);
            //alert($("#hidedDate").value + "ee");
        }
    });
  });
  </script>


<style>
  html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
</head>
<body class="w3-light-grey">

<a href="insert.php">Sisestamine</a> |
<a href="change.php">Muutmine</a>(ei tööta) |
<a href="show.php">Vaatamine</a> |
<a href="myinfo.php">Minu andmed</a> (<a href="show2.php">sammud</a>) |
<a href="search.php">Otsing</a> |
<a href="login.php">Sisse logimine</a> |
<a href="logout.php">Välja logimine</a> |

<?php

  $today = date("H:i:s d.m.Y");

  if (isset($_SESSION['login_user']['id_users']))
  {
    echo "<br>Süsteemis: " . $_SESSION['login_user']['name'] . "
    (" . $_SESSION['login_user']['username'] . ", kasutaja ID:
    " . $_SESSION['login_user']['id_users'] . ", level:
    " . $_SESSION['login_user']['level'] . "). Kuupäev: $today";
  }
  else
  {
    echo "<br>Süsteemi pole keegi sisse loginud. <a href=login.php>Logi sisse</a>.";
  }

?>

<hr height="1" noshade>
