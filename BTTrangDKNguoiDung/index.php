<?php

function loadData($fileName)
{
    $data = file_get_contents($fileName);
    return json_decode($data, true);
}


function saveDataJson($fileName, $name, $email, $phone)
{
        $contact = array(
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
        );
        $data = loadData($fileName); // chuyển từ json sang mảng
        array_push($data, $contact); // thêm dữ liệu vào mảng
        $dataJson = json_encode($data, JSON_PRETTY_PRINT); //Chuyển đổi mảng đã cập nhập thành json ( JSON_PRETTY_PRINT để clear code )
        file_put_contents($fileName, $dataJson); // Ghi dữ liệu vào file
        echo "Upload Thành Công";
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $hasError = false;


    if (empty($name)) {
        $hasError = true;
    }

    if (empty($email)) {
        $hasError = true;
    } else {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $hasError = true;
        }
    }

    if (empty($phone)) {
        $hasError = true;
    }

    if (!$hasError) {
        saveDataJSON("user.json", $name, $email, $phone);
    }


}
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

<form action="" method="post">
    <table>
        <tr>
            <td>Tên người dùng:</td>
            <td><input type="text" name="name" placeholder="Nhập tên vào đây"></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="email" name="email" placeholder="Nhập email vào đây"></td>
        </tr>
        <tr>
            <td>Điện Thoại:</td>
            <td><input type="text" name="phone" placeholder="Nhập SĐT vào đây"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>


<?php
$array = loadData("user.json");
?>
<table border="1" width="50%" cellpadding="5px" cellspacing="0px">
    <thead>
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($array as $arr): ?>
        <tr>
            <td><?php echo $arr['name']; ?></td>
            <td><?php echo $arr['email']; ?></td>
            <td><?php echo $arr['phone']; ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


</body>
</html>
