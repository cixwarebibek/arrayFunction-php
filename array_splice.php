
<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("a"=>"purple","b"=>"orange","c"=>"bibek");
array_splice($a1,0,3,$a2);
print_r($a1);// it prints the array a1 consists the 0,1,2 key for purple orange and bibek and d key for yellow.
?>