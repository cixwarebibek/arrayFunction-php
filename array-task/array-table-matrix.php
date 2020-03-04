<?php
  function getSquareMatrix($n)
  {
      $arr=array();
      $main=1;
          for($i=0; $i<$n; $i++)
          {
            
              for($j=0; $j<$n; $j++)
              {
                
              $arr[$i][$j]=$main;
             
              $main++;
             
              }
             
              
          }
          return $arr;
        }
        $outputs= getSquareMatrix(3);
     
       
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align: center;
            margin: 0 auto;
            margin-top:100px;
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            color: white;
            outline: none;
           
            width: 50%;
        }
        .top{
            background-color: red;
            padding: 10px;
        }
        .middle{
            background-color: blue;
            padding: 10px;
        }
        .buttom{
            background-color: green;
            padding: 10px;
        }
    </style>
</head>
<body>
<table   >
   
        <?php 
       
            
            foreach($outputs as $output) {
                echo '<tr>';
                echo '<td class=top>' . $output[0]. '</td>';
                echo '<td class=middle>' . $output[1] . '</td>';
                echo '<td class=buttom>' . $output[2] . '</td>';
                echo '</tr>';
            }
        ?>
    </table>
    
</body>
</html>