 <?php  

$rain = "sajab";

if ($rain == "sajab")
{
  echo "Võta kaasa vihmavari<br>";
}
elseif ($rain == "ei saja")
{
  echo "Jäta vihmavari koju<br>";
}
else
{
  echo "Parem ära välja mine<br>";
}



$a = 12;
$b = 12;

if ($a > $b)
{
    echo "A $a on suurem kui B $b<br>";
}
elseif ($b > $a)
{
    echo "B $b on suurem kui A $a<br>";
}
else
{
    echo "A $a on võrdne B $b-ga<br>";
}


$money = 10000;

if ($money > 10000)
{
  echo "Raha üle 10k. Olen rahul. Raha $money.<br>";
}
elseif ($money < 10000)
{
  echo "Raha alla 10k. Vaja juurde. Raha $money.<br>";
}
elseif ($money == 10000)
{
  echo "Taha on täpselt 10k. Raha $money<br>";
}


$animal = "rebane";

if ($animal == "jänes")
{
  echo "Tee loomale pai";
}
elseif ($animal == "kiisu")
{
  echo "Paku talle oliivi";
}
elseif ($animal == "koer")
{
  echo "Viska palli";
}
else
{
  echo "Kahtlane loom. Hoia igaks juhuks eemale.<br>";
}



$h = date("H:m:i");
echo "h on $h<br>";

if (
    ($h > 4 AND $h < 10) OR 
    ($h > 21 AND $h < 23)
   )
{
  echo "Mine kohe kalale!<br>";
}
else
{
  echo "Mine magama. Veel pole kalapüügi aeg käes.<br>";
}


#alternatiivne kirjutusviis
$est = true;
$cur = ($est) ? "EUR" : "USD";
echo $cur;

?> 