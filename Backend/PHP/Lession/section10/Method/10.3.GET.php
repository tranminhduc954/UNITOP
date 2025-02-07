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
show_array($_GET);

if (isset($_GET["timkiem"])) { // Kiểm tra xem có dữ liệu được gửi lên không (đã bấm tìm kiếm chưa)
    // Kiểm tra xem có dữ liệu được gửi lên không
    $search_key = $_GET['timkiem'];
    echo "Từ khóa tìm kiếm: $search_key";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phương thức GET trong PHP</title>
</head>
<body>
    <h1>Form Tìm kiếm</h1>
    <!-- <form action="" method="GET">
        <label for="keyword">Từ khóa:</label>
        <input type="text" name="timkiem" id="keyword">
        <button type="submit">Tìm kiếm</button>
    </form> -->
    <form action="" method="GET">
        Tìm kiếm: <input type="text" name="timkiem">
        <input type="submit" name="btn-search" value="Search">
    </form>
</body>
</html>