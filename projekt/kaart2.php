<?php

session_start();

include "dbconnect.php";
include "functions.php";
include "header.php";

check_rights(USER);

?>


<h3>Progress kaardil</h3>


<?php

// SAMMUD kokku
//http://stackoverflow.com/questions/14805851/mysql-sum-column-values-based-on-row-from-the-same-table
$query = "SELECT SUM(fDaysSteps) AS Total FROM tblSteps WHERE user_id = " . $_SESSION['login_user']['id_users'];

$result = mysql_query($query) OR die("Ebaõnnestus2: " . mysql_error());

//TODO Can it be without WHILE
$steps = 0;
while($row = mysql_fetch_assoc($result))
{
  $stepsTotal = $row['Total'];
}

?>

<!-- https://developers.google.com/maps/documentation/javascript/examples/polyline-simple -->
<div id="map" style="height:500px;"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>

  // This example creates a 2-pixel-wide red polyline showing the path of William
  // Kingsford Smith's first trans-Pacific flight between Oakland, CA, and
  // Brisbane, Australia.

  //Tallinn 59.43696079999999, 24.75357459999998
  //Berlin 52.52000659999999, 13.404953999999975  //1042.49 kilometers (km) //center: 55.978483699999984, 19.079264299999977
  //Paris 48.856614, 2.3522219000000177 //1860.60 kilometers (km)

  function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 5,
      center: {lat: 55.9784836, lng: 19.0792642},
      mapTypeId: google.maps.MapTypeId.TERRAIN
    });

    var flightPlanCoordinates = [
      {lat: 59.436960, lng: 24.753574},
      {lat: 52.5200065, lng: 13.4049539}
    ];
    var flightPath = new google.maps.Polyline({
      path: flightPlanCoordinates,
      geodesic: true,
      strokeColor: '#FF0000',
      strokeOpacity: 0.8,
      strokeWeight: 5
    });

    flightPath.setMap(map);
  }


  google.maps.event.addDomListener(window, 'load', initMap);

</script>





<?php

include "footer.php";

?>
