<?php


echo "<h1>Ülesanne 0101</h1>";

echo "<h2>Using mod</h2>";
for ($i = 1; $i <20; $i++)
{
    if ( ($i % 2) == 1 )
    {
        echo $i . "<br />";
    }
}

echo "<hr />";
echo "<h2>Using for loop with step 2</h2>";
for ($i = 1; $i <20; $i+=2)
{
    echo $i . "<br />";
}



?>
