<?php
function demX($str, $n)
{
    $count = 0;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $n) {
            $count++;
        }
    }
    return $count;
}

$str = 'abchdudna';
$n = 'a';
echo (demX($str,$n));

