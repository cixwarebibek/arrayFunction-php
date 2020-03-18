<?php
$a1=array("a"=>array("red"),"b"=>array("green","blue"),);
$a2=array("a"=>array("yellow"),"b"=>array("black"));// it replace the array a1 by array a2
//in this case red replace by yellow and green replace by black in 0 index but in first index blue is not replace 
//because in a2 has only one value
print_r(array_replace_recursive($a1,$a2));
?>
