<?php
// Lấy dữ liệu từ checkbox
// B1: Sử dụng hàm isset() để kiểm tra xem có dữ liệu được gửi đi hay không;
// B2: Sử dụng hàm empty() để kiểm tra xem dữ liệu được gửi đi có rỗng hay không;
// B3: Sử dụng hàm is_array() để kiểm tra xem dữ liệu được gửi đi có phải là mảng hay không;
// B4: Sử dụng vòng lặp foreach() để lấy dữ liệu từ form;
// B5: Hiển thị dữ liệu lấy được ra
function show_arr($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}
show_arr($_POST);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lấy dữ liệu từ Checkbox</title>
</head>
<body>
    <h1>Xác nhận đăng ký</h1>
    <form action="" method="post">
        <input type="checkbox" name="course[]" value="PHP" id="btn-php">
        <label for="btn-php">PHP</label><br>
        <input type="checkbox" name="course[]" value="Java" id="btn-java">
        <label for="btn-java">Java</label><br>
        <input type="checkbox" name="course[]" value="Python" id="btn-python">
        <label for="btn-python">Python</label><br>
        <input type="submit" name="btn-reg" value="Register">
    </form>
</body>
</html>