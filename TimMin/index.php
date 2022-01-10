<?php
function timMin($arr){
    $min = $arr[0];
    $index = 0 ;
    for ($i=1;$i<count($arr);$i++){
        if ($min >$arr[$i]){
            $min = $arr[$i];
            $index = $i;
        }
    }
    return 'Vị Trí: '.$index.' - '.'Giá Trí: '. $min;
}

echo (timMin([9,2,5,3,0,4,6,1]));