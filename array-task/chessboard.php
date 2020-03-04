</html>

<head>
        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    
</head>
  <body>
   <table class="mx-0 mx-auto my-64 border-4 border-black p-5">
      <?php
  
      function chessArray($n)
      {
        for($i=0;$i<$n;$i++)
        {
            echo "<tr>";
            for($j=0;$j<$n;$j++)
            {
            $total=$i+$j;
            if($total%2==0)
            {
            echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";
            }
            else
            {
            echo "<td height=30px width=30px bgcolor=#000000></td>";
            }
            }
            echo "</tr>";
        }
      }
      chessArray(8);
      
    ?>
</table>
</body>
</html>
