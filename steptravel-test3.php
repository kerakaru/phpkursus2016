<!DOCTYPE html>
<html>
<title>StepTravel baseline</title>
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
      onSelect: function(date) {
            alert(date);
            $("#hidedDate").val(date);
            alert($("#hidedDate").value + "ee");
        }
    });
  });
  </script>


<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- UUS tulemine -->
<!--
<div class="w3-container w3-dark-grey w3-padding-hor-32">
    <div class="w3-row">
    
        <input type="text" id="datepicker7" />

    </div>
</div>
-->

<!-- /UUS tulemine -->


<!--
<! -- Top container -- >
<div class="w3-container w3-top w3-black w3-large w3-padding" style="z-index:4">
  <button class="w3-btn w3-hide-large w3-padding-0 w3-hover-text-grey" onclick="w3_open()"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-right">Logo</span>
</div>

<! -- Sidenav/menu -- >
<nav class="w3-sidenav w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="http://www.w3schools.com/w3css/img_avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8">
      <span>Welcome, <strong>MikeXX</strong></span><br>
      <a href="#" class="w3-hover-none w3-hover-text-red w3-show-inline-block"><i class="fa fa-envelope"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-green w3-show-inline-block"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-hover-none w3-hover-text-blue w3-show-inline-block"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <a href="#" class="w3-padding-hor-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove"></i>  Close Menu</a>
  <a href="#" class="w3-padding w3-blue"><i class="fa fa-users"></i>  Overview</a>
  <a href="#" class="w3-padding"><i class="fa fa-eye"></i>  Views</a>
  <a href="#" class="w3-padding"><i class="fa fa-users"></i>  Traffic</a>
  <a href="#" class="w3-padding"><i class="fa fa-bullseye"></i>  Geo</a>
  <a href="#" class="w3-padding"><i class="fa fa-diamond"></i>  Orders</a>
  <a href="#" class="w3-padding"><i class="fa fa-bell"></i>  News</a>
  <a href="#" class="w3-padding"><i class="fa fa-bank"></i>  General</a>
  <a href="#" class="w3-padding"><i class="fa fa-history"></i>  History</a>
  <a href="#" class="w3-padding"><i class="fa fa-cog"></i>  Settings</a><br><br>
</nav>


<!  -- Overlay effect when opening sidenav on small screens -- >
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu"></div>

-->


<!-- !PAGE CONTENT! -->
<div class="w3-main" style=""><!-- margin-left:300px;margin-top:43px; -->

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h3>
		<img src="http://www.w3schools.com/w3css/img_avatar5.png" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:40px"> Tere Emma!
	</h3>
  </header>

  <div class="w3-container w3-dark-grey w3-padding-hor-32">
<div class="w3-row">
	<div class="w3-col w3-third">
	
	  <!-- friend request -->
	  <div class="w3-card-2 w3-round w3-white w3-hover-shadow w3-center ">
        <div class="w3-container">
          <p>Friend Request</p>
          <img src="http://www.w3schools.com/w3css/img_avatar6.png" alt="Avatar" style="width: 50%;"><br>
          <span>Jane Doe</span>
          <div class="w3-row w3-opacity">
            <div class="w3-half">
              <button class="w3-btn w3-green w3-btn-block w3-section" title="Accept"><i class="fa fa-check"></i></button>
            </div>
            <div class="w3-half">
              <button class="w3-btn w3-red w3-btn-block w3-section" title="Decline"><i class="fa fa-remove"></i></button>
            </div>
          </div>
        </div>
      </div>
	</div>

	<div class="w3-col w3-twothird">
        <!-- progress bar -->
 		<div class="w3-progress-container w3-round w3-pale-green">
  			<div id="myBar" class="w3-progressbar w3-green w3-round" style="width:25%">
    			<div class="w3-center w3-text-white">25%</div>
  			</div>
		</div>
	</div>

</div>
  </div>

 
  <div class="w3-container w3-dark-grey w3-padding-hor-32">
    <div class="w3-row">
<form>
      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-green">Kalender</h5>
        <p>Language</p>
        <!-- <p><input type="text" name="alternate" id="alternate" /></p> -->
      <p>Date: <input type="text" id="datepicker" value="<?php if(isset($_GET["hidedDate"])) { echo $_GET['hidedDate']; } ?>" /></p> 
      <input type="hidden" name="hidedDate" id="hidedDate" value="<?php if(isset($_GET["hidedDate"])) { echo $_GET['hidedDate']; } ?>" />
      <!-- <div id="datepicker"></div> -->

      </div>

      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-red">Sammud</h5>
        <p><input type="text" id="inSteps" name="inSteps" value="<?php if(isset($_GET["inSteps"])) { echo $_GET['inSteps']; } ?>" /></p>
      </div>
      <input type="submit" />
</form>

      <div class="w3-container w3-third">
        <h5 class="w3-bottombar w3-border-orange">Kokkuvõte</h5>
        <p>Users</p>
        <p>Active</p>
        <p>Geo</p>
        <p>Interests</p>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-container w3-padding-hor-16 w3-light-grey">
    <h4>FOOTER</h4>
    <p>Powered by <a href="http://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
  </footer>

  <!-- End page content -->
</div>

<script>
// Script to open and close sidenav
function w3_open() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "block";
    document.getElementsByClassName("w3-overlay")[0].style.display = "block";
}
 
function w3_close() {
    document.getElementsByClassName("w3-sidenav")[0].style.display = "none";
    document.getElementsByClassName("w3-overlay")[0].style.display = "none";
}
</script>

</body>
</html>
