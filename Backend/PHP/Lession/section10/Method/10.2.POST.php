<?php
//Nhận dữ liệu từ phương thức POST
//Sử dụng mảng hệ thống $_POST để nhận dữ liệu từ method POST
//Nếu để trống action="" thì form sẽ gửi dữ liệu lên chính trang hiện tại

// $username = $_POST["taikhoan"];
// $password = $_POST["matkhau"];
// echo "{$username} - {$password}";
function show_array($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
show_array($_SERVER);

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $username = $_POST["taikhoan"];
    $password = $_POST["matkhau"];
    echo "{$username} - {$password}";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương thức POST trong PHP</title>
</head>
<body>
    <h1>Form Đăng nhập</h1>
    <form action="" method="POST"> <!--gửi dữ liệu lên file login.php bằng method POST-->
        <label for="username">Tên đăng nhập:</label>
        <input type="text" name="taikhoan" id="username">
        <br>
        <label for="password">Mật khẩu:</label>
        <input type="password" name="matkhau" id="password">
        <br>
        <button type="submit">Đăng nhập</button>
    </form>
</body>
</html>