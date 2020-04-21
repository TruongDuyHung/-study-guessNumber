<?php
$number= 7;
$array=range(1,100);
$left=1;
$right=100;
for ($i=0;$i<count($array);$i++){
    $centerNunber= floor(($left+$right)/2);
    if ($number==$centerNunber) {
        $centerNunber=$number;
    }
    if ($number>$centerNunber) {
        $left=$centerNunber+1;
    } else if ($number<$centerNunber) {
        $right= $centerNunber-1;
    }
}


