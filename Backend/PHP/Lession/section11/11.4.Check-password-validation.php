<?php
// Kiểm tra định dạng password
function show_array($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}
show_array($_POST);

if (isset($_POST['btn-submit'])) {
    $error = []; // Khai báo mảng lưu lỗi (đặt cờ)
    if (!empty($_POST['username'])) {
        // $username = $_POST['username'];
        $partten_username = '/^[A-Za-z0-9_\.]{6,32}$/';
        if (strlen($_POST['username']) >= 6 && strlen($_POST['username']) <= 32) {
            if (!preg_match($partten_username, $_POST['username'])) {
                $error['username'] = 'Username không hợp lệ';
            } else {
                $username = $_POST['username'];
            }
        } else {
            $error['username'] = 'Username phải từ 6 đến 32 ký tự';
        }
    } else {
        $error['username'] = 'Không được để trống thông tin username'; // Gán lỗi (hạ cờ)
    }
    if (!empty($_POST['password'])) {
        // $password = $_POST['password'];
        $partten_password = '/^[A-Za-z\d@$!%*?&]{8,}$/';
        if (strlen($_POST['password']) >= 6 && strlen($_POST['password']) <= 32) {
            if (!preg_match($partten_password, $_POST['password'])) {
                $error['password'] = 'Password phải chứa ít nhất 8 ký tự bắt đầu bằng Chữ in hoa, bao gồm chữ cái thường, số và ký tự đặc biệt';
            } else {
                $password = $_POST['password'];
            }
        } else {
            $error['password'] = 'Password phải từ 6 đến 32 ký tự';
        }
    } else {
        $error['password'] = 'Không được để trống thông tin password'; // Gán lỗi (hạ cờ)
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kiểm tra định dạng mật khẩu</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="" method="POST">
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username"><br>
        <p style="color: red;"><?php if (isset($_POST['btn-submit'])) {if (!empty($error['username'])) {echo $error['username'];}}?></p>
        <label for="password">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <p style="color: red;"><?php if (isset($_POST['btn-submit'])) {if (!empty($error['password'])) {echo $error['password'];}}?></p>
        <input type="submit" name="btn-submit" value="Đăng nhập">
    </form>
</body>
</html>