<?php
// Xuất dữ liệu mảng vào HTML
// -> B1: Chuẩn bị dữ liệu mảng
// -> B2: Chuẩn bị cấu trúc HTML cần đổ dữ liệu
// -> B3: Duyệt dữ liệu mảng (chạy foreach)
// -> B4: Đổ dữ liệu vào HTML
$listNumber = array(2, 4, 6, 8, 10); // Mảng 1 chiều
$listUser = array(
    1 => array(
        'id' => 1,
        'fullname' => 'Trần Minh Đức',
        'email' => 'tranminhduc.hbh@gmail.com'
    ),
    2 => array(
        'id' => 2,
        'fullname' => 'Nguyễn Thùy Linh',
        'email' => 'linhnt.hbh@gmail.com'
    ),
    3 => array(
        'id' => 3,
        'fullname' => 'Trần Đức Trí',
        'email' => 'tranductri.hbh@gmail.com'
    ),
    4 => array(
        'id' => 4,
        'fullname' => 'Trần Đức Minh',
        'email' => 'tranducminh.hbh@gmail.com'
    ),
    5 => array(
        'id' => 5,
        'fullname' => 'Trần Đức Cường',
        'email' => 'tranduccuong.hbh@gmail.com'
    ),
    6 => array(
        'id' => 6,
        'fullname' => 'Trần Đức Việt',
        'email' => 'viettd.hbh@gmail.com'
    )
);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhúng dữ liệu mảng vào html</title>
</head>

<body>
    <!-- MẢNG 1 CHIỀU -->
    <table border="1">
        <h1>Danh sách số nguyên tố</h1>
        <th>Key</th>
        <th>Values</th>
        <?php
        $i = 0;
        foreach ($listNumber as $item) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item; ?></td>
            </tr>
        <?php
        };
        ?>
    </table>

    <!-- MẢNG ĐA CHIỀU -->
    <table border="1px">
        <h1>Thông tin User người dùng</h1>
        <th>STT</th>
        <th>Id</th>
        <th>Họ và Tên</th>
        <th>Email</th>
        <?php
        $i = 0;
        foreach ($listUser as $item) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $item['id']; ?></td>
                <td><?php echo $item['fullname']; ?></td>
                <td><?php echo $item['email']; ?></td>
            </tr>
        <?php
        };
        ?>
    </table>
</body>

</html>