<?php

$inputFileName = "../names_surnames.txt";


//header('Content-Type: text/html; charset=UTF-8');

function getInputFile($inFileName)
{
    $tmp = file_get_contents($inFileName);
    return $tmp;
}


function removeWhiteSpaces($inString)
{
    return str_replace(" 	","#", $inString);
}


function convertStringToArray($inString)
{
    
    $tmpArray = explode("\n", $inString);
    
    
    foreach ($tmpArray as $key => $val)
    //for (i==1; i<20; i++)
    {
        $val = removeWhiteSpaces($val);
        $temp = explode("#", $val);
        $tmpArray[$temp[0]] = $temp[1];
        //$surename = explode("    ", $rows[$key]);
        
        //print_r($surename);
        //$counter++;
        //echo "$counter) Massiivi elemendi indeks: " .  trim($key) . " väärtusega: $val<br />";
    }
    
    return $tmpArray;
}



function getname($name)
{
    $names = "koer    123
kass    435
kukk    89283
kana    93458";
    
    $rows = explode("\n", $names);

echo "<pre>";
    //print_r($rows);
    
    foreach ($rows as $key => $val)
    {
        $temp = explode("    ", $val);
        $surename[$temp[0]] = $temp[1];
        //$surename = explode("    ", $rows[$key]);
        
        print_r($surename);
        //$counter++;
        //echo "$counter) Massiivi elemendi indeks: " .  trim($key) . " väärtusega: $val<br />";
    }
    
echo "</pre><hr />";
    
    
    
   
    
    
    return $count;
}


echo "<hr />";
//echo getInputFile($inputFileName);
echo "<hr />";


echo "<pre>";
    print_r( convertStringToArray(getInputFile($inputFileName)) );
echo "</pre><hr />";

//getname(null);


?>
