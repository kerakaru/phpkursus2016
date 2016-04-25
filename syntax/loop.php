<?php 


for ($i = 0; $i <100; $i++) 
{
    echo $i . " ";
}

echo "<hr>";

    $rand = rand(1,200);
for ($i = 0; $i <200; $i++) 
{

    echo "o ";
    if ($i == $rand) { echo "x "; }
}



?>