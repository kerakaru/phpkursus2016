<?php


echo "<h1>Ülesanne 0103</h1>";

echo "<h2>Using mod</h2>";
for ($i = 100; $i <=1000; $i++)
{
    if ( ($i % 100) == 0 )
    {
        echo $i . "<br />";
    }
}

echo "<hr />";
echo "<h2>Using for loop with step 100</h2>";
for ($i = 100; $i <=1000; $i+=100)
{
    echo $i . "<br />";
}



?>
