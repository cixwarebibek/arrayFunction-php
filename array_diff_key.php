<?php
$a1=array("a"=>"red","b"=>"green","c"=>"blue");
$a2=array("a"=>"red","b"=>"blue","d"=>"pink");

$result=array_diff_key($a1,$a2);//it checks the key only and prints using A-B
print_r($result);
?>