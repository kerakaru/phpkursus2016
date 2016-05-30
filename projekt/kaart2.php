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


//Tallinn 59.43696079999999, 24.75357459999998
      //midpoint 56.107827, 18.56961
//Berlin 52.52000659999999, 13.404953999999975  //1042.49 kilometers (km) //center: 55.978483699999984, 19.079264299999977
//Paris 48.856614, 2.3522219000000177 //1860.60 kilometers (km)

//coordinate "constants" + distance from Tallinn
$coordTallinn = array(59.43696079999999, 24.75357459999998, 0);
$coordBerlin = array(52.52000659999999, 13.404953999999975, 1042);
$coordParis = array(48.856614, 2.3522219000000177, 1860);



function midpoint($lat1, $long1, $lat2, $long2, $per) {
  //return "[" . $lat1+($lat2-$lat1)*$per . "," . $long1+($long2-$long1)*$per . "]";
  return array($lat1+($lat2-$lat1)*$per, $long1+($long2-$long1)*$per );
}

echo "Total steps: " . $stepsTotal / 1000 . " / " . $coordBerlin[2] . "<br />";
$progressPercentage = ( $stepsTotal / 1000) / $coordBerlin[2] ;
echo "progress percentage: " . $progressPercentage . "<br />";

$progressPoint = midpoint($coordTallinn[0], $coordTallinn[1], $coordBerlin[0], $coordBerlin[1], $progressPercentage);

print_r($progressPoint);


?>

<!-- https://developers.google.com/maps/documentation/javascript/examples/polyline-simple -->
<div id="map" style="height:500px;"></div>
<script src="http://maps.googleapis.com/maps/api/js"></script>

<script>

  // This example creates a 2-pixel-wide red polyline showing the path of William
  // Kingsford Smith's first trans-Pacific flight between Oakland, CA, and
  // Brisbane, Australia.

/*
http://www.geomidpoint.com/example.html
  1. convert each decimal latitude and longitude into radians by multiplying each one by PI/180
  2.Convert lat/long to cartesian (x,y,z) coordinates:
  formulas:
    X1 = cos(lat1) * cos(lon1)
    Y1 = cos(lat1) * sin(lon1)
    Z1 = sin(lat1)
  3. Compute combined weighted cartesian coordinate
    X = (X1*w1 + X2*w2 + X3*w3)/totweight (w1=1 jne, totweight=3)
  4. Convert cartesian coordinate to latitude and longitude for the midpoint

Javascript: http://stackoverflow.com/questions/33907276/calculate-point-between-two-coordinates-based-on-a-percentage
*/

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

    var halfpointCoordinates = [
      {lat: 59.436960, lng: 24.753574},
      //{lat: 56.107827, lng: 18.56961}
<?php echo "{lat: " . $progressPoint[0] . ", lng: " . $progressPoint[1] . "}"; ?>
    ];
    var halfPath = new google.maps.Polyline({
      path: halfpointCoordinates,
      geodesic: true,
      strokeColor: '#4CAF50',
      strokeOpacity: 0.9,
      strokeWeight: 5
    });


    flightPath.setMap(map);
    halfPath.setMap(map);

  }


  google.maps.event.addDomListener(window, 'load', initMap);

</script>





<?php

include "footer.php";

?>
