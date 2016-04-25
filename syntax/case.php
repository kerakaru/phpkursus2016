 <?php  

//$menu_id = rand(1, 6);
$menu_id = $_GET['menu_id'];

switch ($menu_id)
{
  case 1:
    echo "Esileht";
    break;
  case 2:
    echo "Tutvustus";
    break;
  case 3:
    echo "Tooted";
    break;
  case 4:
    echo "Kontakt";
    break;
  default:
    echo "Error 404";
    break;
}
echo "<br>";


$nr = 133;

switch ($nr)
{
  case 111:
    echo "Buss 111";
    break;
    
  case 122:
    echo "Buss 122";
    break;
    
  default:
    echo "Sellist bussi pole. Mine trammiga.";
}
echo "<br>";


//break puudub
$day = "E";

switch ($day)
{
  case "E":
    echo "Sinine esmaspäev<br>";
    
  case "T":
    echo "Punane teispäev<br>";
}
echo "<br>";

?> 