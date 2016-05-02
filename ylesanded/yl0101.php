<?php


echo "<h1>Using mod</h1>";
for ($i = 1; $i <20; $i++)
{
    if ( ($i % 2) == 1 )
    {
        echo $i . "<br />";
    }
}

echo "<hr />";
echo "<h1>Using for loop with step 2</h1>";
for ($i = 1; $i <20; $i+=2)
{
    echo $i . "<br />";
}



?>
