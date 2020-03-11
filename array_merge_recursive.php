<?php
$a1=array("a"=>"red","c"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
print_r(array_merge_recursive($a1,$a2));//it merge the array a1 and a2 using the key of array
//in this example it prints the red then green and blue and at last yellow....bcz after green it prints blue bcz its key is same

?>