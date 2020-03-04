
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
    return $arr;
    
   
}
$array=getSquareMatrix(3);
?>

<table border="1">
<?php
    for ($i = 0;$i < count($array);$i++){
        echo "<tr>";
            for ($j=0;$j<count($array[$i]);$j++){
                echo "<td height=30px width=30px bgcolor=blue>";
                echo $array[$i][$j];
                echo "</td>";
            }
        echo "</tr>";
    }
?>




