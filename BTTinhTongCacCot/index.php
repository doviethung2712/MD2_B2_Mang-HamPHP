<?php
$arr = [
    [1,2,3],
    [4,5,6],
    [7,8,9],
    [10,11,12]
];

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" cellspacing="0" cellpadding="5px">
    <?php for ($i = 0; $i < count($arr); $i++) { ?>
        <tr>
            <?php for ($j = 0; $j < count($arr[$i]); $j++) { ?>
                <td style="text-align: center"><?php echo $arr[$i][$j] ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
</body>
</html>
<?php
function tinhCot($arr,$n){
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($j == $n){
                $total += $arr[$i][$j];
            }
        }
    }
    return $total;
}
$n = 1;
echo ("Tổng cột ". $n. " bằng: " .tinhCot($arr,$n));