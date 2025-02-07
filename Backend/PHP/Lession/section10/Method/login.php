<?php
// Nhận dữ liệu từ phương thức POST
// Sử dụng mảng hệ thống $_POST để nhận dữ liệu từ method POST
// $_POST là một mảng kết hợp trong PHP
// Dữ liệu được gửi lên từ form sẽ được lưu trong mảng $_POST
// Dữ liệu được lưu trong mảng $_POST sẽ có key là name của input trong form
// Ví dụ: input có name="user" thì dữ liệu sẽ được lưu trong $_POST['user']
// input có name="pass" thì dữ liệu sẽ được lưu trong $_POST['pass']
echo "<pre>";
print_r($_POST);
echo "<pre>";

$username = $_POST["taikhoan"];
$password = $_POST["matkhau"];
echo "{$username} - {$password}";
?>