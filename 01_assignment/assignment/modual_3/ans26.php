<?php

$arr = array("a"=>"21","b"=>"31","c"=>"7","d"=>"20");


$sum = 2;

$keys = array_rand($arr , $sum);

echo $arr[$keys["0"]]. " ".$arr[$keys["1"]];  

?>