<?php
// Nhận dữ liệu từ phương thức GET
// Sử dụng mảng hệ thống $_GET để nhận dữ liệu từ method GET
// $_GET là một mảng kết hợp trong PHP
// Dữ liệu được gửi lên từ form sẽ được lưu trong mảng $_GET
// Dữ liệu được lưu trong mảng $_GET sẽ có key là name của input trong form
// Ví dụ: input có name="user" thì dữ liệu sẽ được lưu trong $_GET['user']
// input có name="pass" thì dữ liệu sẽ được lưu trong $_GET['pass']
function show_array($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}
show_array($_SERVER);

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // Kiểm tra xem có dữ liệu được gửi lên không
    $search_key = $_GET['timkiem'];
    echo "Từ khóa tìm kiếm: $search_key";
}

?>