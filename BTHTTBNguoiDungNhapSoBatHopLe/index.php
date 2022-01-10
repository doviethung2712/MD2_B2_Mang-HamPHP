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
<form action="" method="get">
    <input type="text" name="st1" placeholder="Nhập Số Vào Đây">
    <select name="giatri">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input type="text" name="st2" placeholder="Nhập Số Vào Đây">
    <button>Tính</button>
</form>
</body>
</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == "GET") {
    $st1 = $_REQUEST['st1'];
    $st2 = $_REQUEST['st2'];
    $giatri = $_REQUEST['giatri'];
}
function total($st1, $st2, $giatri)
{
    switch ($giatri) {
        case '+':
            return $st1 + $st2;
        case '-':
            return $st1 - $st2;
        case '*':
            return $st1 * $st2;
        case '/':
            if ($st2 != 0) {
                return $st1 / $st2;
            } else {
                echo "Số Bị Chia Phải Lớn Hơn 0 :))";
            }
    }
}
echo(total($st1, $st2, $giatri));