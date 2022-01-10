<?php
$arr = [2, 5, 4, 7, 6, 9, 8];
$n = 5;
print_r($arr) ;
echo '<br/>';

function delete($arr,$n)
{
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $n) {
            unset($arr[$i]);
//            array_splice($arr,$i,1);
        }
    }
    return $arr;
}

print_r(delete($arr , $n));