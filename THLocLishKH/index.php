<?php
$customerList = [
        "1" => [
            "name" => "Mai Văn Hoàn",
            "day_of_birth" => "2021/08/21",
            "address" => "Hà Nội",
            "profile" => "img/anh1.jpg"],
        "2" => [
            "name" => "Nguyễn Văn Nam",
            "day_of_birth" => "2021/08/20",
            "address" => "Bắc Giang",
            "profile" => "img/anh2.jpg"],
        "3" => [
            "name" => "Nguyễn Thái Hòa",
            "day_of_birth" => "2021/08/12",
            "address" => "Nam Định",
            "profile" => "img/anh3.jpg"],
        "4" => [
            "name" => "Trần Đăng Khoa",
            "day_of_birth" => "2021/08/19",
            "address" => "Hà Tây",
            "profile" => "img/anh4.jpg"],
        "5" => [
            "name" => "Nguyễn Đình Thi",
            "day_of_birth" => "2021/08/17",
            "address" => "Hà Nội",
            "profile" => "img/anh5.jpg"]
    ];

function searchByDate($customers, $fromDate, $toDate)
{
    if (empty($fromDate) || empty($toDate)) {
        return $customers;
    }

    $filteredCustomers = [];
    foreach ($customers as $customer) {
        if (strtotime($customer['day_of_birth']) < strtotime($fromDate))
            continue;
        if (strtotime($customer['day_of_birth']) > strtotime($toDate))
            continue;
        $filteredCustomers[] = $customer;
    }
    return $filteredCustomers;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>List Khách Hàng</title>
</head>
<body>
<?php
$fromDate = null;
$toDate = null;
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $fromDate = $_REQUEST["from"];
    $toDate = $_REQUEST["to"];
}
$filteredCustomers = searchByDate($customerList, $fromDate, $toDate);
?>
<form method="GET">
    Chọn ngày sinh từ: <input id="from" type="date" name="from" placeholder="yyyy/mm/dd"
                              value="<?php echo isset($fromDate) ? $fromDate : ''; ?>"/>
    đến: <input id="to" type="date" name="to" placeholder="yyyy/mm/dd"
                value="<?php echo isset($toDate) ? $toDate : ''; ?>"/>
    <input type="submit" id="submit" value="Lọc"/>
</form>
<table border="0" width="100%">
    <caption><h2>Danh sách khách hàng</h2></caption>
    <tr>
        <th>STT</th>
        <th>Tên</th>
        <th>Ngày sinh</th>
        <th>Địa chỉ</th>
        <th>Ảnh</th>
    </tr>
    <?php foreach ($filteredCustomers as $number => $customer): ?>
        <tr>
            <td><?php echo $number+1 ; ?></td>
            <td><?php echo $customer['name']; ?></td>
            <td><?php echo $customer['day_of_birth']; ?></td>
            <td><?php echo $customer['address']; ?></td>
            <td>
                <div><img src="<?php echo $customer['profile']; ?>"/></div>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>