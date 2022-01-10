<?php
//function gop($a1, $a2)
//{
//    $a3 = [];
//    for ($i = 0; $i < count($a1); $i++) {
//        array_push($a3, $a1[$i]);
//    }
//    for ($j = 0; $j < count($a2); $j++) {
//        array_push($a3, $a2[$j]);
//    }
//    return $a3;
//}

$arr1 = [1, 5, 1, 5];
$arr2 = [5, 3, 6, 2];
$arr3 = [];
$arr3 = array_merge($arr1,$arr2);
print_r($arr3);

//print_r(gop($arr1, $arr2));