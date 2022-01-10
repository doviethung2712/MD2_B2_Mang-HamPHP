<?php
function timMax($arr){
    $max = $arr[0][0];
    for ($i=0;$i<count($arr);$i++){
        for ($j=1;$j<count($arr[$i]);$j++){
            if ($max < $arr[$i][$j]){
                $max = $arr[$i][$j];
            }
        }
    }
    return $max;
}
$arr1 = [
    [2,6,1,5,2,3],
    [2,6,2,4,8,9],
    [6,4,3,5,10,2],
];
echo (timMax($arr1));
