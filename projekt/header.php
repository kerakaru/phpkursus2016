<!DOCTYPE html>
<html>

<head>
  <title>CLONEKasutajate andmebaas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Lato">
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
  body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
  .w3-navbar, label {font-family: "Montserrat", sans-serif}
</style>
</head>
<body class="w3-light-grey">



  <!-- Navbar -->
  <div class="w3-top">
  <ul class="w3-navbar w3-dark-grey w3-card-2 w3-left-align">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
    <li><a href="myinfo.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">HOME</a></li>
    <li class="w3-hide-small"><a href="show2.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">SAMMUD</a></li>
    <li class="w3-hide-small"><a href="kaart2.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">KAARDIL</a></li>
    <li class="w3-hide-small"><a href="login.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">Sisse logimine</a></li>
    <li class="w3-hide-small"><a href="logout.php" class="w3-hover-none w3-hover-text-grey w3-padding-large">Välja logimine</a></li>
<!--
    <li class="w3-hide-small w3-dropdown-hover">
      <a href="javascript:void(0)" class="w3-hover-none w3-padding-large" title="More">MORE <i class="fa fa-caret-down"></i></a>
      <div class="w3-dropdown-content w3-white w3-card-4">
        <a href="javascript:void(0)">Merchandise</a>
        <a href="javascript:void(0)">Extras</a>
        <a href="javascript:void(0)">Media</a>
      </div>
    </li>
    <li class="w3-hide-small w3-right"><a href="javascript:void(0)" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a></li>
-->
  </ul>
  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
    <ul class="w3-navbar w3-left-align w3-black">
      <li><a class="w3-padding-large" href="show2.php">SAMMUD</a></li>
      <li><a class="w3-padding-large" href="login.php">Sisse logimine</a></li>
      <li><a class="w3-padding-large" href="logout.php">Välja logimine</a></li>
<!--      <li><a class="w3-padding-large" href="#">MERCH</a></li> -->
    </ul>
  </div>




<!--
<a href="insert.php">Sisestamine</a> |
<a href="change.php">Muutmine</a>(ei tööta) |
<a href="show.php">Vaatamine</a> |
      <a href="myinfo.php">Minu andmed</a> (<a href="show2.php">sammud</a>) |
<a href="search.php">Otsing</a> |
<a href="login.php">Sisse logimine</a> |
<a href="logout.php">Välja logimine</a> |
-->
<div style="margin-top:46px"> <!--  class="w3-content" -->

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
