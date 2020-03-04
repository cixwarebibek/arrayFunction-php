<?php
    function getSquareMatrix($n)
    {
        $array = [];
        for ($i = 0;$i < $n;$i++)
        {
            for ($j = 0;$j < $n;$j++)
            {
                $array[$i][$j] = ' ';
            }
        }
        return $array;
    }
    $chess = getSquareMatrix(8);
?>
<html>
    <head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>
    <body>
    <table class="mx-0 mx-auto my-32 border-2 border-black p-5">
    <?php
        for ($i = 0;$i < count($chess);$i++){
            echo "<tr>";
                for ($j=0;$j < count($chess[$i]);$j++){
                    if(($i+$j)%2==0)
                        {
                        echo "<td height=50px width=50px bgcolor=black></td>";
                        }
                        else
                        {
                        echo "<td height=50px width=50px bgcolor=white></td>";
                        }
                        }
                        echo "</tr>";
                }
    ?>
</table>
    </body>
</html>


