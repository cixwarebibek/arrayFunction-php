<?php

function getSquareMatrix($n)
{
    $count = 1;
    $arr = [];
    for ($i = 0;$i < $n;$i++)
    {

        for ($j = 0;$j < $n;$j++)
        {
           $arr[$i][$j] = $count;
           $count ++;
        }
    }
    for ($i = 0;$i < $n;$i++)
    { // printing the array
        for ($j = 0;$j < $n;$j++)
        {
            echo $arr[$i][$j] . " ";
        }
        echo '<br>';
        
    }
}
getSquareMatrix(3);
?>