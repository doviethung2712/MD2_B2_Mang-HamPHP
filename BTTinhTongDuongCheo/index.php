<?php
$arr = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9],
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
<table border="1px">
    <?php for ($i = 0; $i < count($arr); $i++) { ?>
        <tr>
            <?php for ($j = 0; $j < count($arr[$i]); $j++) { ?>
                <td><?php echo $arr[$i][$j] ?></td>
            <?php } ?>
        </tr>
    <?php } ?>
</table>
<?php
function tongCheo($arr)
{
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($i == $j) {
                $total += $arr[$i][$j];
            }
        }
    }
    return $total;
}

echo('Tong chéo từ trái sang phải: '.tongCheo($arr));
echo '<br>';

function tongCheoNguoc($arr)
{
    $sum = 0;
    for ($i = 0;$i < count($arr); $i++) {
        for ($j = 0; $j < count($arr[$i]); $j++) {
            if ($i+$j == count($arr)-1){
                $sum += $arr[$i][$j];
            }
        }
    }
    return $sum;
}

echo ('Tong chéo từ phải sang trái: '.tongCheoNguoc($arr));
?>

</body>
</html>